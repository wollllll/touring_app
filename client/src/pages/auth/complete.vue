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
      <Heading>アカウント登録完了</Heading>
      <Step />
      <Information class="mt-5">
        <p>アカウントの登録が完了しました！</p>
        <p>お楽しみください。</p>
      </Information>
    </Section>
  </Base>
</template>
