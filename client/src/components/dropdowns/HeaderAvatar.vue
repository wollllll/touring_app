<script setup>
import Avatar from '@/components/users/Avatar'
import IconWithText from '@/components/viewParts/IconWithText'
import { authService } from '@/services/authService'
import { modalService } from '@/services/modalService'
import { computed, nextTick } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()
const user = computed(() => authService.getters.auth().value)

const logout = () => {
  authService.logout()

  nextTick(() => {
    router.push({ name: 'top' })
  })
}
</script>

<template>
  <div class="dropdown dropdown-end ml-3">
    <Avatar size="w-10 h-10" class="hover:opacity-75 cursor-pointer" />
    <ul
      tabindex="0"
      class="menu menu-compact dropdown-content bg-base-100 rounded-box w-52 p-2 mt-3 shadow"
    >
      <li>
        <router-link :to="{ name: 'user_show', params: { id: user.id } }">
          <IconWithText icon-class="bi-person"> アカウント</IconWithText>
        </router-link>
      </li>
      <li>
        <router-link
          :to="{ name: 'top' }"
          @click="modalService.commit.setIsShownSpotByCreate(true)"
        >
          <IconWithText icon-class="bi-geo-alt"> スポットの投稿</IconWithText>
        </router-link>
      </li>
      <li>
        <button @click="logout" type="button">
          <IconWithText icon-class="bi-arrow-bar-right">
            ログアウト
          </IconWithText>
        </button>
      </li>
    </ul>
  </div>
</template>
