<script setup>
import Base from '@/components/modals/Base'
import CloseButton from '@/components/modals/CloseButton'
import Profile from '@/components/users/Profile'
import Carousel from '@/components/viewParts/Carousel'
import IconWithText from '@/components/viewParts/IconWithText'
import { modalService } from '@/services/modalService'
import { spotService } from '@/services/spotService'
import { ref } from 'vue'

const show = ref(spotService.getters.showSpot())
const isShowModal = modalService.getters.isShownSpot()
</script>

<template>
  <Base :class="isShowModal ? 'modal-open' : ''">
    <template #title>
      <IconWithText icon-class="bi-geo-alt">
        {{ show.title }}
      </IconWithText>
    </template>
    <template #close>
      <CloseButton @click="modalService.commit.setIsShownSpot(false)" />
    </template>
    <template #content>
      <Carousel />
      <div class="flex justify-between">
        <div class="flex items-center">
          <p class="font-bold">2022-4-30 10:00</p>
        </div>
        <label class="swap">
          <input type="checkbox" />
          <i class="bi bi-star swap-off text-2xl fill-current" />
          <i
            class="bi bi-star-fill swap-on text-2xl text-yellow-400 fill-current"
          />
        </label>
      </div>
      <p>{{ show.content }}</p>
      <Profile class="mt-5" :show-follow="true" />
    </template>
  </Base>
</template>
