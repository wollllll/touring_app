<script setup>
import Footer from '@/components/layouts/Footer'
import Header from '@/components/layouts/Header'
import Modal from '@/components/layouts/Modal'
</script>

<template>
  <div>
    <div class="secondary-bg-color scroll-custom flex flex-col h-screen">
      <Header class="lg:px-40 shadow" />
      <main class="scroll-hidden lg:px-40 grow overflow-y-scroll shadow">
        <div class="xl:px-64 p-5">
          <slot />
        </div>
      </main>
    </div>
    <Footer class="lg:px-40" />
    <Modal />
  </div>
</template>
