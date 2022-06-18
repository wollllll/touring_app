<script setup>
import GoogleLogin from '@/components/buttons/Google'
import LineLogin from '@/components/buttons/Line'
import PrimaryButton from '@/components/buttons/PrimaryButton'
import TwitterLogin from '@/components/buttons/Twitter'
import FormControl from '@/components/formParts/FormControl'
import Input from '@/components/formParts/Input'
import Label from '@/components/formParts/Label'
import IconWithText from '@/components/viewParts/IconWithText'
import { authService } from '@/services/authService'
import { nextTick, ref } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()
const email = ref('')
const password = ref('')

const login = () => {
  authService.login({ email: email.value, password: password.value })

  nextTick(() => {
    router.push({ name: 'top' })
  })
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
      <FormControl>
        <template #label>
          <Label id="email" :required="true">メールアドレス</Label>
        </template>
        <template #input>
          <Input
            type="email"
            label="メールアドレス"
            id="email"
            placeholder="メールアドレス"
            v-model="email"
          />
        </template>
      </FormControl>
      <FormControl>
        <template #label>
          <Label id="password" :required="true">パスワード</Label>
        </template>
        <template #input>
          <Input
            type="password"
            label="パスワード"
            id="password"
            placeholder="パスワード"
            v-model="password"
          />
        </template>
      </FormControl>
      <PrimaryButton @click="login">
        <IconWithText icon-class="bi-lock"> ログイン</IconWithText>
      </PrimaryButton>
    </div>
  </div>
</template>
