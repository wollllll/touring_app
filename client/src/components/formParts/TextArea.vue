<script setup>
import { computed } from 'vue'

const props = defineProps({
  id: String,
  placeholder: String,
  rows: Number,
  required: Boolean,
  modelValue: String,
})

const emit = defineEmits(['update:modelValue'])
const value = computed({
  get: () => props.modelValue,
  set: (value) => {
    emit('update:modelValue', value)
  },
})
</script>

<template>
  <textarea
    :placeholder="placeholder"
    :id="id"
    :rows="rows"
    class="textarea textarea-bordered w-full mt-1"
    v-model="value"
  ></textarea>
</template>
