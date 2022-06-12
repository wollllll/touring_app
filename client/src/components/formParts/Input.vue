<script setup>
import { computed } from 'vue'

const props = defineProps({
  type: String,
  id: String,
  placeholder: String,
  disabled: Boolean,
  modelValue: String,
})

const emit = defineEmits(['update:modelValue'])
const text = computed({
  get: () => props.modelValue,
  set: (value) => {
    emit('update:modelValue', value)
  },
})
</script>

<template>
  <input
    :type="type"
    :placeholder="placeholder"
    :id="id"
    :disabled="disabled"
    class="input input-bordered w-full mt-1"
    v-model="text"
  />
</template>
