<script setup>
import PrimaryButton from '@/components/buttons/PrimaryButton'
import Avatar from '@/components/users/Avatar'
import { useRouter } from 'vue-router'

const router = useRouter()

const props = defineProps({
  showFollow: {
    type: Boolean,
    default: false,
  },
})
</script>

<template>
  <article>
    <div class="flex justify-between">
      <div class="flex">
        <div
          class="flex cursor-pointer"
          @click="router.push({ name: 'user_show', params: { id: 1 } })"
        >
          <Avatar size="w-10 h-10" />
          <p class="my-auto ml-3 font-bold">加藤タカヒロ</p>
        </div>
        <div class="flex items-center ml-3">
          <!-- todo: ログインユーザー以外は表示しない -->
          <router-link
            :to="{ name: 'user_edit', params: { id: 1 } }"
            class="hover:opacity-75"
          >
            <i class="bi bi-gear text-lg" />
          </router-link>
        </div>
      </div>
      <div class="flex items-center">
        <!-- todo: ログインユーザー以外は表示しない -->
        <PrimaryButton class="btn-sm w-auto mt-0"> フォロー中 </PrimaryButton>
      </div>
    </div>
    <p class="mt-3">
      プロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィール
    </p>
    <p v-if="showFollow" class="mt-3 text-sm text-right">
      <router-link
        :to="{ name: 'user_follow', params: { id: 1 } }"
        class="hover:opacity-75"
      >
        <span class="font-bold">100</span>&nbsp;フォロー
      </router-link>
      <router-link
        :to="{ name: 'user_follower', params: { id: 1 } }"
        class="hover:opacity-75 ml-1"
      >
        <span class="font-bold">50</span>&nbsp;フォロワー
      </router-link>
    </p>
  </article>
</template>
