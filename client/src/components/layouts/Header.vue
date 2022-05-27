<script setup>
import DropdownHeaderAvatar from '@/components/dropdowns/HeaderAvatar'
import { authService } from '@/services/authService'
import { modalService } from '@/services/modalService'
import { computed } from 'vue'

const APP_NAME = process.env.VUE_APP_APP_NAME
const user = computed(() => authService.getters.auth().value)
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
          @click="modalService.commit.setIsShownSearch(true)"
          class="hover:opacity-75"
        >
          <i class="bi-search text-xl" />
        </router-link>
        <DropdownHeaderAvatar v-if="user" />
        <router-link v-else :to="{ name: 'auth_index' }">
          <i class="bi bi-person-circle ml-3 text-3xl" />
        </router-link>
      </div>
    </div>
  </header>
</template>
