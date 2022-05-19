<script setup>
import PrimaryButton from '@/components/buttons/PrimaryButton'
import CheckBox from '@/components/formParts/CheckBox'
import Input from '@/components/formParts/Input'
import Base from '@/components/modals/Base'
import CloseButton from '@/components/modals/CloseButton'
import IconWithText from '@/components/viewParts/IconWithText'
import { storeService } from '@/services/storeService'

const isShowModal = storeService.getters.isShowSearchModal()
</script>

<template>
  <Base :class="isShowModal ? 'modal-open' : ''">
    <template #title>
      <IconWithText icon-class="bi-search"> スポットを検索 </IconWithText>
    </template>
    <template #close>
      <CloseButton @click="storeService.commit.setIsShowSearchModal(false)" />
    </template>
    <template #content>
      <Input type="text" placeholder="検索" />
      <div class="divider" />
      <p class="font-bold">条件付きで検索</p>
      <div class="lg:grid-cols-5 grid grid-cols-1">
        <div class="lg:col-span-2">
          <CheckBox>お気に入りスポット</CheckBox>
        </div>
        <div class="lg:col-start-4 lg:col-span-2 lg:mt-0 mt-3">
          <CheckBox>フォローアカウント</CheckBox>
        </div>
      </div>
      <div class="mt-5 text-right">
        <PrimaryButton class="btn-md w-auto">
          <IconWithText icon-class="bi-search text-sm"> 検索 </IconWithText>
        </PrimaryButton>
      </div>
    </template>
  </Base>
</template>
