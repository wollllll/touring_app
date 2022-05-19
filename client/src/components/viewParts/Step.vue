<script setup>
import { useRoute } from 'vue-router'

let isAuthRegisterStep = false
let isAuthConfirm = false
let isAuthSetting = false
let isAuthCompleteStep = false

switch (useRoute().name) {
  case 'auth_register':
    isAuthRegisterStep = true
    break
  case 'auth_confirm':
    isAuthRegisterStep = true
    isAuthConfirm = true
    break
  case 'auth_setting':
    isAuthRegisterStep = true
    isAuthConfirm = true
    isAuthSetting = true
    break
  case 'auth_complete':
    isAuthRegisterStep = true
    isAuthConfirm = true
    isAuthSetting = true
    isAuthCompleteStep = true
    break
}
</script>

<template>
  <div class="text-center">
    <ul class="steps steps-horizontal w-full">
      <li class="step" :class="isAuthRegisterStep ? 'step-primary' : ''">
        入力
      </li>
      <li class="step" :class="isAuthConfirm ? 'step-primary' : ''">確認</li>
      <li class="step" :class="isAuthSetting ? 'step-primary' : ''">設定</li>
      <li class="step" :class="isAuthCompleteStep ? 'step-primary' : ''">
        登録完了！
      </li>
    </ul>
  </div>
</template>
