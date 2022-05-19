<script setup>
const props = defineProps({
  size: String,
})
</script>

<template>
  <div tabindex="0" class="avatar">
    <div class="rounded-full" :class="size">
      <img src="https://api.lorem.space/image/face?hash=92310" alt="アバター" />
    </div>
  </div>
</template>
