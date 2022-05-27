<script setup>
import { auth } from '@/axios/auth'
import Avatar from '@/components/users/Avatar'
import IconWithText from '@/components/viewParts/IconWithText'
import { authService } from '@/services/authService'
import { modalService } from '@/services/modalService'
import {alertService} from "@/services/alertService";

const logout = () => {
  auth
    .logout()
    .then(() => {
      authService.commit.setAuth(null)
        alertService.commit.setIsShownSuccess(true)
        alertService.commit.setSuccessText('ログアウトしました。')
        setTimeout(() => {
            alertService.commit.setIsShownSuccess(false)
            alertService.commit.setSuccessText('')
        }, 3000)
    })
    .catch((error) => console.log(error))
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
        <router-link :to="{ name: 'user_show', params: { id: 1 } }">
          <IconWithText icon-class="bi-person"> アカウント </IconWithText>
        </router-link>
      </li>
      <li>
        <router-link
          :to="{ name: 'top' }"
          @click="modalService.commit.setIsShownCreateSpot(true)"
        >
          <IconWithText icon-class="bi-geo-alt"> スポットの投稿 </IconWithText>
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
