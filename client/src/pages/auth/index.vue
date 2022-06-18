<script setup>
import Information from '@/components/alerts/Information'
import PrimaryButton from '@/components/buttons/PrimaryButton'
import Login from '@/components/formParts/Login'
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import Breadcrumb from '@/components/viewParts/Breadcrumb'
import Heading from '@/components/viewParts/Heading'
import IconWithText from '@/components/viewParts/IconWithText'
import { useRouter } from 'vue-router'

const router = useRouter()
</script>

<template>
  <Base>
    <Breadcrumb />
    <Section>
      <Heading>アカウント登録</Heading>
      <Information>
        <p>スポットを投稿するにはアカウントを登録する必要があります。</p>
        <p>
          アカウントを登録するとスポットのお気に入り追加や他の人のアカウントをフォローすることが出来ます。
        </p>
      </Information>
      <PrimaryButton @click="router.push({ name: 'auth_register' })">
        <IconWithText icon-class="bi-person-plus"
          >アカウントを新規登録</IconWithText
        >
      </PrimaryButton>
    </Section>
    <Section>
      <Heading>ログイン</Heading>
      <Login />
    </Section>
  </Base>
</template>
