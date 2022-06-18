<script setup>
import SearchModal from '@/components/modals/Search'
import SpotModalByCreate from '@/components/modals/spots/Create'
import SpotModalByDestroy from '@/components/modals/spots/Destroy'
import SpotModalByEdit from '@/components/modals/spots/Edit'
import SpotModalByShow from '@/components/modals/spots/Show'
</script>

<template>
  <div>
    <SearchModal />
    <SpotModalByShow />
    <SpotModalByCreate />
    <SpotModalByEdit />
    <SpotModalByDestroy />
  </div>
</template>
