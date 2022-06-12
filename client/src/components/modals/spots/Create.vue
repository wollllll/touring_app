<script setup>
import PrimaryButton from '@/components/buttons/PrimaryButton'
import FormControl from '@/components/formParts/FormControl'
import Input from '@/components/formParts/Input'
import Label from '@/components/formParts/Label'
import TextArea from '@/components/formParts/TextArea'
import Base from '@/components/modals/Base'
import CloseButton from '@/components/modals/CloseButton'
import IconWithText from '@/components/viewParts/IconWithText'
import { modalService } from '@/services/modalService'

const isShowModal = modalService.getters.isShownCreateSpot()
</script>

<template>
  <Base :class="isShowModal ? 'modal-open' : ''">
    <template #title>
      <IconWithText icon-class="bi-geo-alt"> スポットの投稿 </IconWithText>
    </template>
    <template #close>
      <CloseButton @click="modalService.commit.setIsShownCreateSpot(false)" />
    </template>
    <template #content>
      <div class="w-full h-40 bg-red-500">画像アップロード</div>
      <FormControl>
        <template #label>
          <Label for="create_name" required>スポット名</Label>
        </template>
        <template #input>
          <Input
            type="text"
            id="create_name"
            placeholder="例）静岡の隠れスポット"
          />
        </template>
      </FormControl>
      <FormControl>
        <template #label>
          <Label for="create_content" required>投稿内容</Label>
        </template>
        <template #input>
          <TextArea
            label="投稿内容"
            id="create_content"
            placeholder="例）景色が綺麗でおすすめです！"
            :rows="5"
          />
        </template>
      </FormControl>
      <div class="flex mt-3">
        <FormControl>
          <template #label>
            <Label for="create_latitude" required>緯度</Label>
          </template>
          <template #input>
            <Input
              type="text"
              label="緯度"
              id="create_latitude"
              placeholder="緯度"
              disabled
              class="mt-0 mr-1"
            />
          </template>
        </FormControl>
        <FormControl class="mt-0">
          <template #label>
            <Label for="create_longitude" required>経度</Label>
          </template>
          <template #input>
            <Input
              type="text"
              label="経度"
              id="create_longitude"
              placeholder="経度"
              disabled
              class="mt-0 ml-1"
            />
          </template>
        </FormControl>
      </div>
      <div class="mt-5 text-right">
        <PrimaryButton class="btn-md w-auto">
          <IconWithText icon-class="bi bi-pencil-square"> 投稿 </IconWithText>
        </PrimaryButton>
      </div>
    </template>
  </Base>
</template>
