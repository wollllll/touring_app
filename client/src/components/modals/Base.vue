<script setup>
import Section from '@/components/layouts/Section'
</script>

<template>
  <div class="modal">
    <div class="modal-box scroll-hidden relative">
      <div class="grid grid-cols-12">
        <div class="col-span-11">
          <h3 class="text-lg font-bold">
            <slot name="title" />
          </h3>
        </div>
        <div class="w-full col-span-1 text-right">
          <slot name="close" />
        </div>
      </div>
      <Section>
        <slot name="content" />
      </Section>
    </div>
  </div>
</template>
