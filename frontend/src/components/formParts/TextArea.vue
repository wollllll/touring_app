<script setup>
import Base from '@/components/formParts/Base'
import Label from '@/components/formParts/Label'

const props = defineProps({
  label: String,
  id: String,
  placeholder: String,
  rows: Number,
  required: Boolean,
})
</script>

<template>
  <Base>
    <Label :for="id" :required="required">{{ label }}</Label>
    <textarea
      :placeholder="placeholder"
      :id="id"
      :rows="rows"
      class="textarea textarea-bordered w-full mt-1"
    ></textarea>
  </Base>
</template>
