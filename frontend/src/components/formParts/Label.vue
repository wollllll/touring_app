<script setup>
const props = defineProps({
  id: String,
  required: Boolean,
})
</script>

<template>
  <label :for="id" class="cursor-pointer">
    <slot />
    <span v-if="required" class="text-red-500">&nbsp;*</span>
  </label>
</template>
