<script setup>
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import UserEdit from '@/components/users/Edit'
import Breadcrumb from '@/components/viewParts/Breadcrumb'
import HeadingTitle from '@/components/viewParts/HeadingTitle'
</script>

<template>
  <Base>
    <Breadcrumb />
    <Section>
      <HeadingTitle>アカウント設定</HeadingTitle>
      <UserEdit />
    </Section>
  </Base>
</template>
