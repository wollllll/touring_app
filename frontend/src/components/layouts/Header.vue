<script setup>
import DropdownHeaderAvatar from '@/components/dropdowns/HeaderAvatar'
import { storeService } from '@/services/storeService'

const APP_NAME = process.env.VUE_APP_APP_NAME
</script>

<template>
  <header class="primary-bg-color">
    <div class="navbar">
      <div class="flex-1">
        <router-link
          :to="{ name: 'top' }"
          class="btn btn-ghost text-lg normal-case"
        >
          {{ APP_NAME }}
        </router-link>
      </div>
      <div class="flex-none gap-2">
        <router-link
          :to="{ name: 'top' }"
          @click="storeService.commit.setIsShowSearchModal(true)"
          class="hover:opacity-75"
        >
          <i class="bi-search text-xl" />
        </router-link>
        <DropdownHeaderAvatar />
      </div>
    </div>
  </header>
</template>
