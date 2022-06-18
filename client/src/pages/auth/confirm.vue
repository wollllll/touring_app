<script setup>
import Information from '@/components/alerts/Information'
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import Heading from '@/components/viewParts/Heading'
import Step from '@/components/viewParts/Step'
</script>

<template>
  <Base>
    <Section>
      <Heading>メールアドレス確認</Heading>
      <Step />
      <Information class="mt-5">
        <p>まだアカウントの登録が完了していません。</p>
        <p>ご登録のメールアドレス宛てに確認メールを送信しました。</p>
        <p>メールに記載のURLを押して承認をしてください。</p>
      </Information>
    </Section>
  </Base>
</template>
