<script setup>
import GoogleLogin from '@/components/buttons/Google'
import LineLogin from '@/components/buttons/Line'
import PrimaryButton from '@/components/buttons/PrimaryButton'
import TwitterLogin from '@/components/buttons/Twitter'
import Input from '@/components/formParts/Input'
import IconWithText from '@/components/viewParts/IconWithText'
import Axios from 'axios'

const axios = Axios.create({
  baseURL: 'http://192.168.33.10/',
  headers: { 'X-Requested-With': 'XMLHttpRequest' },
  withCredentials: true,
})

const signIn = () => {
  // ログイン処理前にCSRFトークンを初期化
  axios.get('sanctum/csrf-cookie').then((response) => {
    console.log(response)

    axios
      .post('api/login', {
        email: 'sakin50guramu@gmail.com',
        password: 'katou0406',
      })
      .then((r) => console.log(r))
      .catch((e) => console.log(e))
  })
}

const getUser = () => {
  axios
    .get('api/user', {
      withCredentials: true,
    })
    .then((r) => console.log(r))
    .catch((e) => console.log(e))
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
      <button @click="getUser">get</button>
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
      <PrimaryButton @click="signIn">
        <IconWithText icon-class="bi-lock"> ログイン </IconWithText>
      </PrimaryButton>
    </div>
  </div>
</template>
