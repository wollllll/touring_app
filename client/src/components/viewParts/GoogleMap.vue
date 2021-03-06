<script setup>
import { spot } from '@/axios/spot'
import Information from '@/components/alerts/Information'
import PrimaryButton from '@/components/buttons/PrimaryButton'
import Spot from '@/components/spots/Show'
import IconWithText from '@/components/viewParts/IconWithText'
import { modalService } from '@/services/modalService'
import { spotService } from '@/services/spotService'
import { computed, ref } from 'vue'
import { GoogleMap, Marker } from 'vue3-google-map'

const API_KEY = process.env.VUE_APP_GOOGLE_MAP_API_KEY
const center = ref({ lat: 35.0889962, lng: 138.9533645 })
const currentPosition = ref({})
const showSpot = computed(() => spotService.getters.spot().value)
const spots = computed(() => spotService.getters.spots().value)

spot
  .get()
  .then((response) => {
    spotService.commit.setSpots(response.data.spots)
  })
  .catch((error) => {
    console.log(error)
  })

const setSpot = (spot) => {
  center.value = { lat: spot.latitude, lng: spot.longitude }
  spotService.commit.setSpot(spot)
}

navigator.geolocation.getCurrentPosition(
  (response) => {
    currentPosition.value = {
      position: {
        lat: response.coords.latitude,
        lng: response.coords.longitude,
      },
    }
  },
  (error) => {
    alert('現在地を有効にしてください。')
  }
)
</script>

<template>
  <GoogleMap
    class="relative w-full h-full"
    :api-key="API_KEY"
    :center="center"
    :zoom="15"
    :fullscreenControl="false"
    :mapTypeControl="false"
    :zoomControl="false"
    :streetViewControl="false"
    :keyboardShortcuts="false"
  >
    <Marker
      @click="setSpot(spot)"
      :key="index"
      v-for="(spot, index) in spots"
      :options="{ position: { lat: spot.latitude, lng: spot.longitude } }"
    />
    <Marker :options="currentPosition" />
    <PrimaryButton
      class="btn-sm top-3 absolute inset-x-0 w-2/3 max-w-xs mx-auto mt-0"
    >
      <IconWithText icon-class="bi-search"> 中心を検索 </IconWithText>
    </PrimaryButton>
    <i
      class="bi bi-record-circle absolute inset-0 w-10 h-10 m-auto text-xl leading-10 text-center"
    ></i>
    <Information
      v-if="showSpot.id"
      class="bottom-3 sm:w-1/2 absolute inset-x-0 w-11/12 max-w-md mx-auto bg-white"
    >
      <Spot
        :spot="showSpot"
        @click="modalService.commit.setIsShownSpotByShow(true)"
      />
    </Information>
  </GoogleMap>
</template>
