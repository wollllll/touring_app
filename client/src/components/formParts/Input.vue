<script setup>
import Base from '@/components/formParts/Base'
import Label from '@/components/formParts/Label'

const props = defineProps({
  type: String,
  label: String,
  id: String,
  placeholder: String,
  value: String,
  required: Boolean,
  disabled: Boolean,
})

const value = props.value
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
      v-model="value"
    />
  </Base>
</template>
