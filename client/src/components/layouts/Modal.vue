<script setup>
import SearchModal from '@/components/modals/Search'
import SpotModalByCreate from '@/components/modals/spots/Create'
import SpotModalByShow from '@/components/modals/spots/Show'
import SpotModalByEdit from '@/components/modals/spots/Edit'
</script>

<template>
  <div>
    <SearchModal />
    <SpotModalByShow />
    <SpotModalByCreate />
      <SpotModalByEdit />
  </div>
</template>
