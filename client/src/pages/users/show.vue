<script setup>
import { user as userAxios } from '@/axios/user'
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import Spot from '@/components/spots/Show'
import Profile from '@/components/users/Profile'
import Breadcrumb from '@/components/viewParts/Breadcrumb'
import Heading from '@/components/viewParts/Heading'
import { authService } from '@/services/authService'
import { modalService } from '@/services/modalService'
import { spotService } from '@/services/spotService'
import { computed, ref } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()
const auth = computed(() => authService.getters.auth().value)
const user = ref(null)

const setSpot = (spot) => {
  spotService.commit.setSpot(spot)
  modalService.commit.setIsShownSpotByShow(true)
}

userAxios
  .find({ id: route.params.id })
  .then((response) => (user.value = response.data.user))
  .catch((error) => console.log(error))
</script>

<template>
  <Base>
    <Breadcrumb />
    <Section>
      <Heading>プロフィール</Heading>
      <div class="card bg-white shadow">
        <div class="card-body">
          <Profile v-if="user" :show-follow="true" :user="user" />
        </div>
      </div>
    </Section>
    <Section>
      <Heading>投稿スポット</Heading>
      <template v-if="user">
        <ul class="lg:grid lg:grid-cols-2">
          <li
            :key="spot.id"
            v-for="spot in user.spots"
            class="lg:odd:mr-auto lg:even:ml-auto lg:col-span-1 mb-6"
            style="width: 98%"
          >
            <Spot :spot="spot" @click="setSpot(spot)" />
          </li>
        </ul>
      </template>
    </Section>
  </Base>
</template>
