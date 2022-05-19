<script setup>
import Header from '@/components/layouts/Header'
import Modal from '@/components/layouts/Modal'
import GoogleMap from '@/components/viewParts/GoogleMap'
</script>

<template>
  <div>
    <div class="secondary-bg-color flex flex-col h-screen">
      <Header class="lg:px-40 shadow" />
      <main class="lg:px-40 grow">
        <GoogleMap />
      </main>
    </div>
    <Modal />
  </div>
</template>
