<script setup>
import DangerButton from '@/components/buttons/DangerButton'
import PrimaryButton from '@/components/buttons/PrimaryButton'
import Base from '@/components/modals/Base'
import CloseButton from '@/components/modals/CloseButton'
import IconWithText from '@/components/viewParts/IconWithText'
import { modalService } from '@/services/modalService'
import { spotService } from '@/services/spotService'
import { computed } from 'vue'

const isShownModal = modalService.getters.isShownSpotByDestroy()
const spot = computed(() => spotService.getters.spot().value)

const destroy = () => {
  spotService.delete(spot.value.id)
}
</script>

<template>
  <Base :class="isShownModal ? 'modal-open' : ''">
    <template #title>
      <IconWithText icon-class="bi-geo-alt">
        スポットを削除しますか？
      </IconWithText>
    </template>
    <template #close>
      <CloseButton @click="modalService.commit.setIsShownSpotByDestroy(false)" />
    </template>
    <template #content>
      <div class="flex justify-end mt-5">
        <PrimaryButton
          @click="modalService.commit.setIsShownSpotByDestroy(false)"
          class="btn-md w-auto"
        >
          <IconWithText icon-class="bi bi-x-circle"> キャンセル </IconWithText>
        </PrimaryButton>
        <DangerButton @click="destroy" class="btn-md w-auto mt-0 ml-3">
          <IconWithText icon-class="bi bi-trash"> 削除 </IconWithText>
        </DangerButton>
      </div>
    </template>
  </Base>
</template>
