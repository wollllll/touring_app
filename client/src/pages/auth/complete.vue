<script setup>
import Information from '@/components/alerts/Information'
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import HeadingTitle from '@/components/viewParts/HeadingTitle'
import Step from '@/components/viewParts/Step'
</script>

<template>
  <Base>
    <Section>
      <HeadingTitle>アカウント登録完了</HeadingTitle>
      <Step />
      <Information class="mt-5">
        <p>アカウントの登録が完了しました！</p>
        <p>お楽しみください。</p>
      </Information>
    </Section>
  </Base>
</template>
