<script setup>
import { spotService } from '@/services/spotService'
import { ref } from 'vue'

const show = ref(spotService.getters.showSpot())
console.log('carousel')
</script>

<template>
  <div class="carousel w-full h-48">
    <div id="slide1" class="carousel-item relative w-full">
      <img
        src="https://api.lorem.space/image/car?w=800&h=200&hash=8B7BCDC2"
        class="object-contain w-full"
      />
      <div
        class="left-5 right-5 top-1/2 absolute flex justify-between transform -translate-y-1/2"
      >
        <a href="#slide4" class="btn btn-circle">❮</a>
        <a href="#slide2" class="btn btn-circle">❯</a>
      </div>
    </div>
  </div>
</template>
