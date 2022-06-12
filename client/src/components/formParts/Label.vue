<script setup>
const props = defineProps({
  required: Boolean,
})
</script>

<template>
  <label class="cursor-pointer">
    <slot />
    <span v-if="required" class="text-red-500">&nbsp;*</span>
  </label>
</template>
