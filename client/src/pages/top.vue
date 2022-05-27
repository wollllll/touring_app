<script setup>
import Alert from '@/components/layouts/Alert'
import Header from '@/components/layouts/Header'
import Modal from '@/components/layouts/Modal'
import GoogleMap from '@/components/viewParts/GoogleMap'
</script>

<template>
  <div>
    <div class="secondary-bg-color flex flex-col h-screen">
      <Header class="lg:px-40 shadow" />
      <Alert />
      <main class="lg:px-40 grow">
        <GoogleMap />
      </main>
    </div>
    <Modal />
  </div>
</template>
