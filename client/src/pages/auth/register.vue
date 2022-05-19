<script setup>
import Information from '@/components/alerts/Information'
import PrimaryButton from '@/components/buttons/PrimaryButton'
import Input from '@/components/formParts/Input'
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import HeadingTitle from '@/components/viewParts/HeadingTitle'
import IconWithText from '@/components/viewParts/IconWithText'
import Step from '@/components/viewParts/Step'
import { useRouter } from 'vue-router'

const router = useRouter()
</script>

<template>
  <Base>
    <Section>
      <HeadingTitle>メールアドレス入力</HeadingTitle>
      <Step />
      <Input
        type="text"
        label="メールアドレス"
        id="register_email"
        placeholder="メールアドレス"
        :required="true"
      />
      <Information class="mt-5">
        <p>
          利用規約、プライバシーポリシーに同意したうえでメールアドレスを送信してください。
        </p>
      </Information>
      <div>re chapter</div>
      <PrimaryButton @click="router.push({ name: 'auth_confirm' })">
        <IconWithText icon-class="bi-send"> メールアドレスを送信</IconWithText>
      </PrimaryButton>
    </Section>
  </Base>
</template>
