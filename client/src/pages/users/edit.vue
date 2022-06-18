<script setup>
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import UserEdit from '@/components/users/Edit'
import Breadcrumb from '@/components/viewParts/Breadcrumb'
import Heading from '@/components/viewParts/Heading'
</script>

<template>
  <Base>
    <Breadcrumb />
    <Section>
      <Heading>アカウント設定</Heading>
      <UserEdit />
    </Section>
  </Base>
</template>
