<script setup>
const props = defineProps({
  type: String,
  id: String,
  placeholder: String,
  disabled: Boolean,
})
</script>

<template>
    <input
        :type="type"
        :placeholder="placeholder"
        :id="id"
        :disabled="disabled"
        class="input input-bordered w-full mt-1"
    />
</template>
