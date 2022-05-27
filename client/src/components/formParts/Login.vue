<script setup>
import { auth } from '@/axios/auth'
import GoogleLogin from '@/components/buttons/Google'
import LineLogin from '@/components/buttons/Line'
import PrimaryButton from '@/components/buttons/PrimaryButton'
import TwitterLogin from '@/components/buttons/Twitter'
import Input from '@/components/formParts/Input'
import IconWithText from '@/components/viewParts/IconWithText'
import { alertService } from '@/services/alertService'
import { authService } from '@/services/authService'
import { useRouter } from 'vue-router'

const router = useRouter()

const login = () => {
  auth
    .login({ email: 'test@test', password: 'testtest' })
    .then((response) => {
      authService.commit.setAuth(response.data.auth)
      router.push({ name: 'top' })
      alertService.commit.setIsShownSuccess(true)
      alertService.commit.setSuccessText('ログインしました。')
      setTimeout(() => {
        alertService.commit.setIsShownSuccess(false)
        alertService.commit.setSuccessText('')
      }, 3000)
    })
    .catch((error) => console.log(error))
}
</script>

<template>
  <div class="lg:flex-row flex flex-col">
    <div class="place-items-center lg:py-5 grid flex-grow">
      <TwitterLogin class="mt-0" />
      <LineLogin class="lg:mt-0" />
      <GoogleLogin class="lg:mt-0" />
    </div>
    <div class="divider lg:divider-horizontal" />
    <div class="place-items-center lg:py-5 grid flex-grow">
      <Input
        type="login_email"
        label="メールアドレス"
        id="email"
        placeholder="メールアドレス"
      />
      <Input
        type="login_password"
        label="パスワード"
        id="password"
        placeholder="パスワード"
      />
      <PrimaryButton @click="login">
        <IconWithText icon-class="bi-lock"> ログイン </IconWithText>
      </PrimaryButton>
    </div>
  </div>
</template>
