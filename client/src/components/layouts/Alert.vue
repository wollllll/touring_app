<script setup>
import Success from '@/components/alerts/Success'
import { alertService } from '@/services/alertService'

const isShownSuccessAlert = alertService.getters.isShownSuccess()
const successText = alertService.getters.successText()
</script>

<template>
  <div class="relative z-10">
    <Success v-if="isShownSuccessAlert">{{ successText }}</Success>
  </div>
</template>
