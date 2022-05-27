<script setup>
import Alert from '@/components/layouts/Alert'
import Footer from '@/components/layouts/Footer'
import Header from '@/components/layouts/Header'
import Modal from '@/components/layouts/Modal'
</script>

<template>
  <div>
    <div class="secondary-bg-color scroll-custom flex flex-col h-screen">
      <Header class="lg:px-40 shadow" />
      <Alert />
      <main
        class="scroll-hidden lg:px-40 grow relative overflow-y-scroll shadow"
      >
        <div class="xl:px-64 p-5">
          <slot />
        </div>
      </main>
    </div>
    <Footer class="lg:px-40" />
    <Modal />
  </div>
</template>
