<script setup>
const props = defineProps({
  iconClass: String,
})
</script>

<template>
  <span> <i class="bi text-lg" :class="iconClass" />&nbsp;<slot /> </span>
</template>
