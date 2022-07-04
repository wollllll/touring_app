<script setup>
import Avatar from '@/components/users/Avatar'
import { authService } from '@/services/authService'
import { computed } from 'vue'
import { useRouter } from 'vue-router'

const props = defineProps({
  user: {
    type: Object,
  },
  showFollow: {
    type: Boolean,
    default: false,
  },
})

const router = useRouter()
const auth = computed(() => authService.getters.auth().value)
</script>

<template>
  <article>
    <div class="flex justify-between">
      <div class="flex">
        <div
          class="flex cursor-pointer"
          @click="router.push({ name: 'user_show', params: { id: user.id } })"
        >
          <Avatar size="w-10 h-10" />
          <p v-if="user" class="my-auto ml-3 font-bold">{{ user.name }}</p>
        </div>
        <div class="flex items-center ml-3">
          <template v-if="auth">
            <router-link
              v-if="user.id === auth.id"
              :to="{ name: 'user_edit', params: { id: user.id } }"
              class="hover:opacity-75"
            >
              <i class="bi bi-gear text-lg" />
            </router-link>
          </template>
        </div>
      </div>
      <!--      <div class="flex items-center">-->
      <!--        <template v-if="auth">-->
      <!--          <PrimaryButton v-if="user.id !== auth.id" class="btn-sm w-auto mt-0">-->
      <!--            フォロー中-->
      <!--          </PrimaryButton>-->
      <!--        </template>-->
      <!--      </div>-->
    </div>
    <p class="mt-3">
      {{ user.profile }}
    </p>
    <!--    <p v-if="showFollow" class="mt-3 text-sm text-right">-->
    <!--      <router-link-->
    <!--        :to="{ name: 'user_follow', params: { id: user.id } }"-->
    <!--        class="hover:opacity-75"-->
    <!--      >-->
    <!--        <span class="font-bold">100</span>&nbsp;フォロー-->
    <!--      </router-link>-->
    <!--      <router-link-->
    <!--        :to="{ name: 'user_follow', params: { id: user.id } }"-->
    <!--        class="hover:opacity-75 ml-1"-->
    <!--      >-->
    <!--        <span class="font-bold">50</span>&nbsp;フォロワー-->
    <!--      </router-link>-->
    <!--    </p>-->
  </article>
</template>
