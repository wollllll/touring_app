<script setup>
import Base from '@/components/formParts/Base'
import Label from '@/components/formParts/Label'

const props = defineProps({
  type: String,
  label: String,
  id: String,
  placeholder: String,
  required: Boolean,
  disabled: Boolean,
})
</script>

<template>
  <Base>
    <Label v-if="label" :for="id" :required="required">
      {{ label }}
    </Label>
    <input
      :type="type"
      :placeholder="placeholder"
      :id="id"
      :disabled="disabled"
      class="input input-bordered w-full mt-1"
    />
  </Base>
</template>
