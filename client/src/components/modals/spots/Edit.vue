<script setup>
import PrimaryButton from '@/components/buttons/PrimaryButton'
import FormControl from '@/components/formParts/FormControl'
import Input from '@/components/formParts/Input'
import Label from '@/components/formParts/Label'
import TextArea from '@/components/formParts/TextArea'
import Base from '@/components/modals/Base'
import CloseButton from '@/components/modals/CloseButton'
import IconWithText from '@/components/viewParts/IconWithText'
import { authService } from '@/services/authService'
import { modalService } from '@/services/modalService'
import { spotService } from '@/services/spotService'
import { computed, ref } from 'vue'

const auth = computed(() => authService.getters.auth().value)
const isShownModal = modalService.getters.isShownSpotByEdit()
const spot = computed(() => spotService.getters.spot().value)

const update = () => {
  spotService.update(spot.value.id, {
    name: spot.value.name,
    content: spot.value.content,
  })
}
</script>

<template>
  <Base :class="isShownModal ? 'modal-open' : ''">
    <template #title>
      <IconWithText icon-class="bi-geo-alt"> スポットの編集 </IconWithText>
    </template>
    <template #close>
      <CloseButton @click="modalService.commit.setIsShownSpotByEdit(false)" />
    </template>
    <template #content>
      <div class="w-full h-40 bg-red-500">画像アップロード</div>
      <FormControl>
        <template #label>
          <Label for="edit_name" required>スポット名</Label>
        </template>
        <template #input>
          <Input
            type="text"
            id="edit_name"
            placeholder="例）静岡の隠れスポット"
            v-model="spot.name"
          />
        </template>
      </FormControl>
      <FormControl>
        <template #label>
          <Label for="edit_content" required>投稿内容</Label>
        </template>
        <template #input>
          <TextArea
            label="投稿内容"
            id="edit_content"
            placeholder="例）景色が綺麗でおすすめです！"
            :rows="5"
            v-model="spot.content"
          />
        </template>
      </FormControl>
      <div class="flex mt-3">
        <FormControl>
          <template #label>
            <Label for="edit_latitude" required>緯度</Label>
          </template>
          <template #input>
            <Input
              type="text"
              label="緯度"
              id="edit_latitude"
              placeholder="緯度"
              disabled
              class="mt-0 mr-1"
              :value="spot.latitude"
            />
          </template>
        </FormControl>
        <FormControl class="mt-0">
          <template #label>
            <Label for="edit_longitude" required>経度</Label>
          </template>
          <template #input>
            <Input
              type="text"
              label="経度"
              id="edit_longitude"
              placeholder="経度"
              disabled
              class="mt-0 ml-1"
              :value="spot.longitude"
            />
          </template>
        </FormControl>
      </div>
      <div class="mt-5 text-right">
        <PrimaryButton @click="update" class="btn-md w-auto">
          <IconWithText icon-class="bi bi-arrow-repeat"> 更新 </IconWithText>
        </PrimaryButton>
      </div>
    </template>
  </Base>
</template>
