<script setup>
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import UserEdit from '@/components/users/Edit'
import Breadcrumb from '@/components/viewParts/Breadcrumb'
import Heading from '@/components/viewParts/Heading'
import { authService } from '@/services/authService'
import { computed } from 'vue'

const auth = computed(() => authService.getters.auth().value)
</script>

<template>
  <Base>
    <Breadcrumb />
    <Section>
      <Heading>アカウント設定</Heading>
      <UserEdit v-if="auth" :auth="auth" />
    </Section>
  </Base>
</template>
