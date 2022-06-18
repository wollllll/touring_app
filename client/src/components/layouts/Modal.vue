<script setup>
import SearchModal from '@/components/modals/Search'
import SpotModalByCreate from '@/components/modals/spots/Create'
import SpotModalByShow from '@/components/modals/spots/Show'
</script>

<template>
  <div>
    <SearchModal />
    <SpotModalByShow />
    <SpotModalByCreate />
  </div>
</template>
