<script setup>
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import UserEdit from '@/components/users/Edit'
import HeadingTitle from '@/components/viewParts/HeadingTitle'
import Step from '@/components/viewParts/Step'
</script>

<template>
  <Base>
    <Section>
      <HeadingTitle>アカウント設定</HeadingTitle>
      <Step />
      <UserEdit />
    </Section>
  </Base>
</template>
