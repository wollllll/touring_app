<script setup>
import Base from '@/components/modals/Base'
import CloseButton from '@/components/modals/CloseButton'
import Profile from '@/components/users/Profile'
import Carousel from '@/components/viewParts/Carousel'
import IconWithText from '@/components/viewParts/IconWithText'
import { authService } from '@/services/authService'
import { modalService } from '@/services/modalService'
import { spotService } from '@/services/spotService'
import { computed } from 'vue'

const isShowModal = modalService.getters.isShownSpotByShow()
const spot = computed(() => spotService.getters.spot().value)
const auth = computed(() => authService.getters.auth().value)
</script>

<template>
  <Base :class="isShowModal ? 'modal-open' : ''">
    <template #title>
      <IconWithText icon-class="bi-geo-alt">
        {{ spot.name }}
      </IconWithText>
    </template>
    <template #close>
      <CloseButton @click="modalService.commit.setIsShownSpotByShow(false)" />
    </template>
    <template #content>
      <Carousel />
      <div class="flex justify-between">
        <div class="flex items-center">
          <label class="swap hover:opacity-75">
            <input type="checkbox" />
            <i class="bi bi-star swap-off text-2xl fill-current" />
            <i
              class="bi bi-star-fill swap-on text-2xl text-yellow-400 fill-current"
            />
          </label>
          <p class="ml-3 font-bold">{{ spot.created_at }}</p>
        </div>
        <template v-if="spot.user && auth">
          <div class="dropdown dropdown-end">
            <label tabindex="0">
              <i
                v-if="spot.user.id === auth.id"
                class="bi bi-list hover:opacity-75 text-2xl cursor-pointer"
              />
            </label>
            <ul
              tabindex="0"
              class="dropdown-content menu bg-base-100 rounded-box w-32 p-2 shadow-md"
            >
              <li>
                <div @click="modalService.commit.setIsShownSpotByEdit(true)">
                  <IconWithText icon-class="bi-gear"> 編集 </IconWithText>
                </div>
              </li>
              <li>
                <div
                  @click="modalService.commit.setIsShownSpotByDestroy(true)"
                  class="text-error"
                >
                  <IconWithText icon-class="bi-trash"> 削除 </IconWithText>
                </div>
              </li>
            </ul>
          </div>
        </template>
      </div>
      <p>{{ spot.content }}</p>
      <Profile
        v-if="spot.user"
        class="mt-5"
        :show-follow="true"
        :user="spot.user"
      />
    </template>
  </Base>
</template>
