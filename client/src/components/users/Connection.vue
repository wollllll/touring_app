<script setup>
import Profile from '@/components/users/Profile'
import Heading from '@/components/viewParts/Heading'
import users from '@/fakers/users'
import { useRoute } from 'vue-router'

const props = defineProps({
  Heading: String,
})
let isUserFollowPage = false
let isUserFollowerPage = false

switch (useRoute().name) {
  case 'user_follow':
    isUserFollowPage = true
    break
  case 'user_follower':
    isUserFollowerPage = true
    break
}
</script>

<template>
  <div>
    <Heading>{{ Heading }}</Heading>
    <div class="tabs">
      <router-link
        :to="{ name: 'user_follow' }"
        class="tab tab-bordered"
        :class="isUserFollowPage ? 'tab-active' : ''"
      >
        フォロー
      </router-link>
      <router-link
        :to="{ name: 'user_follower' }"
        class="tab tab-bordered"
        :class="isUserFollowerPage ? 'tab-active' : ''"
      >
        フォロワー
      </router-link>
    </div>
    <ul class="lg:grid lg:grid-cols-2 mt-5">
      <li
        :key="user.id"
        v-for="user in users"
        class="lg:odd:mr-auto lg:even:ml-auto lg:col-span-1 mb-6"
        style="width: 98%"
      >
        <div class="card bg-white shadow">
          <div class="card-body p-4">
            <Profile />
          </div>
        </div>
      </li>
    </ul>
  </div>
</template>
