<script setup>
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import Profile from '@/components/users/Profile'
import Breadcrumb from '@/components/viewParts/Breadcrumb'
import HeadingTitle from '@/components/viewParts/HeadingTitle'
import { spots } from '@/fakers/spots'
import { authService } from '@/services/authService'
import { modalService } from '@/services/modalService'
import { spotService } from '@/services/spotService'
import { ref } from 'vue'

const setShowSpot = (spot) => {
  spotService.commit.setShowSpot(spot)
  modalService.commit.setIsShownSpot(true)
}

const auth = ref(authService.getters.auth())
</script>

<template>
  <Base>
    <Breadcrumb />
    <Section>
      <HeadingTitle>プロフィール</HeadingTitle>
      <div class="card bg-white shadow">
        <div class="card-body">
          <Profile v-if="auth" :show-follow="true" :user="auth" />
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
          <!--          <ShowSpot :spot="spot" @click="setShowSpot(spot)" />-->
        </li>
      </ul>
    </Section>
  </Base>
</template>
