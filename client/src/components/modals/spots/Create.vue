<script setup>
import PrimaryButton from '@/components/buttons/PrimaryButton'
import Input from '@/components/formParts/Input'
import TextArea from '@/components/formParts/TextArea'
import Base from '@/components/modals/Base'
import CloseButton from '@/components/modals/CloseButton'
import IconWithText from '@/components/viewParts/IconWithText'
import { storeService } from '@/services/storeService'

const isShowModal = storeService.getters.isCreateSpotModal()
</script>

<template>
  <Base :class="isShowModal ? 'modal-open' : ''">
    <template #title>
      <IconWithText icon-class="bi-geo-alt"> スポットの投稿 </IconWithText>
    </template>
    <template #close>
      <CloseButton @click="storeService.commit.setIsCreateSpotModal(false)" />
    </template>
    <template #content>
      <div class="w-full h-40 bg-red-500">画像アップロード</div>
      <Input
        type="text"
        label="スポット名"
        id="create_name"
        placeholder="例）静岡の隠れスポット"
        :required="true"
      />
      <TextArea
        label="投稿内容"
        id="create_content"
        placeholder="例）景色が綺麗でおすすめです！"
        :required="true"
        :rows="5"
      />
      <div class="flex mt-3">
        <Input
          type="text"
          label="緯度"
          id="create_latitude"
          placeholder="緯度"
          :disabled="true"
          class="mt-0 mr-1"
        />
        <Input
          type="text"
          label="経度"
          id="create_longitude"
          placeholder="経度"
          :disabled="true"
          class="mt-0 ml-1"
        />
      </div>
      <div class="mt-5 text-right">
        <PrimaryButton class="btn-md w-auto">
          <IconWithText icon-class="bi bi-pencil-square"> 投稿 </IconWithText>
        </PrimaryButton>
      </div>
    </template>
  </Base>
</template>
