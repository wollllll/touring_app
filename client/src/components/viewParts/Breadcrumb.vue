<script setup>
import { getRoutes } from '@/router/breadcrumbs'

const lastRouteName = Object.keys(getRoutes()).reverse().shift()
</script>

<template>
  <div class="breadcrumbs p-0 text-sm">
    <ul>
      <li :key="routeName" v-for="(route, routeName) in getRoutes()">
        <router-link
          v-if="lastRouteName !== routeName"
          :to="{ name: routeName }"
        >
          <span v-if="routeName === 'top'"
            ><i class="bi bi-house-fill" />&nbsp;</span
          >{{ route.title }}
        </router-link>
        <span v-else>{{ route.title }}</span>
      </li>
    </ul>
  </div>
</template>
