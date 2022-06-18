<script setup>
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import UserEdit from '@/components/users/Edit'
import Heading from '@/components/viewParts/Heading'
import Step from '@/components/viewParts/Step'
</script>

<template>
  <Base>
    <Section>
      <Heading>アカウント設定</Heading>
      <Step />
      <UserEdit />
    </Section>
  </Base>
</template>
