<script setup>
import { spot } from '@/axios/spot'
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import Spot from '@/components/spots/Show'
import Profile from '@/components/users/Profile'
import Breadcrumb from '@/components/viewParts/Breadcrumb'
import Heading from '@/components/viewParts/Heading'
import { authService } from '@/services/authService'
import { modalService } from '@/services/modalService'
import { spotService } from '@/services/spotService'
import { ref } from 'vue'

const spots = ref({})
const auth = ref(authService.getters.auth())

const setSpot = (spot) => {
  spotService.commit.setSpot(spot)
  modalService.commit.setIsShownSpotByShow(true)
}

spot
  .get()
  .then((response) => (spots.value = response.data.spots))
  .catch((error) => console.log(error))
</script>

<template>
  <Base>
    <Breadcrumb />
    <Section>
      <Heading>プロフィール</Heading>
      <div class="card bg-white shadow">
        <div class="card-body">
          <Profile v-if="auth" :show-follow="true" :user="auth" />
        </div>
      </div>
    </Section>
    <Section>
      <Heading>投稿スポット</Heading>
      <ul class="lg:grid lg:grid-cols-2">
        <li
          :key="spot.id"
          v-for="spot in spots"
          class="lg:odd:mr-auto lg:even:ml-auto lg:col-span-1 mb-6"
          style="width: 98%"
        >
          <Spot :spot="spot" @click="setSpot(spot)" />
        </li>
      </ul>
    </Section>
  </Base>
</template>
