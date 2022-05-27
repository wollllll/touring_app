<script setup>
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import ShowSpot from '@/components/spots/Show'
import Profile from '@/components/users/Profile'
import Breadcrumb from '@/components/viewParts/Breadcrumb'
import HeadingTitle from '@/components/viewParts/HeadingTitle'
import { spots } from '@/fakers/spots'
import { modalService } from '@/services/modalService'
import { spotService } from '@/services/spotService'
import { ref } from 'vue'

const showSpot = ref(spotService.getters.showSpot())
const setShowSpot = (spot) => {
  spotService.commit.setShowSpot(spot)
  modalService.commit.setIsShownSpot(true)
}
</script>

<template>
  <Base>
    <Breadcrumb />
    <Section>
      <HeadingTitle>プロフィール</HeadingTitle>
      <div class="card bg-white shadow">
        <div class="card-body">
          <Profile :show-follow="true" />
        </div>
      </div>
    </Section>
    <Section>
      <HeadingTitle>投稿スポット</HeadingTitle>
      <ul class="lg:grid lg:grid-cols-2">
        <li
          :key="spot.id"
          v-for="spot in spots"
          class="lg:odd:mr-auto lg:even:ml-auto lg:col-span-1 mb-6"
          style="width: 98%"
        >
          <ShowSpot :spot="spot" @click="setShowSpot(spot)" />
        </li>
      </ul>
    </Section>
  </Base>
</template>
