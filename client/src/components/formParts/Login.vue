<script setup>
import GoogleLogin from '@/components/buttons/GoogleLogin'
import LineLogin from '@/components/buttons/LineLogin'
import PrimaryButton from '@/components/buttons/PrimaryButton'
import TwitterLogin from '@/components/buttons/TwitterLogin'
import Input from '@/components/formParts/Input'
import IconWithText from '@/components/viewParts/IconWithText'
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
      <PrimaryButton>
        <IconWithText icon-class="bi-lock"> ログイン </IconWithText>
      </PrimaryButton>
    </div>
  </div>
</template>
