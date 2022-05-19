<script setup>
import Avatar from '@/components/users/Avatar'
import IconWithText from '@/components/viewParts/IconWithText'

const props = defineProps({
  spot: Object,
})
</script>

<template>
  <div class="hover:opacity-75 flex cursor-pointer">
    <figure class="w-2/5">
      <div class="card">
        <img
          class="w-30 h-24"
          :src="require(`@/../public/img/${spot.image_url}`)"
          :alt="spot.title"
        />
      </div>
    </figure>
    <div class="w-3/5 pl-4">
      <h2 class="font-bold">
        <IconWithText icon-class="bi-geo-alt">
          {{ spot.title }}
        </IconWithText>
      </h2>
      <div class="flex mt-2 text-sm">
        <Avatar size="w-7" />
        <div class="my-auto ml-2">
          <span>- {{ spot.user_name }}</span>
        </div>
      </div>
    </div>
  </div>
</template>
