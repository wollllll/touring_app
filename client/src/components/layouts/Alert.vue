<script setup>
import Error from '@/components/alerts/Error'
import Success from '@/components/alerts/Success'
import { alertService } from '@/services/alertService'
import { ref, watch, watchEffect } from 'vue'

const isShownSuccessAlert = alertService.getters.isShownSuccess()
const isShownErrorAlert = ref(false)
const successText = alertService.getters.successText()
const errorText = ref('')

watchEffect(() => {
  isShownErrorAlert.value = alertService.getters.isShownError()
  errorText.value = alertService.getters.errorText()
})
</script>

<template>
  <div class="relative z-10">
    <Success v-if="isShownSuccessAlert">{{ successText }}</Success>
    <Error v-if="isShownErrorAlert">{{ errorText }}</Error>
  </div>
</template>
