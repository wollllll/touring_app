<script setup>
import Base from '@/components/layouts/Base'
import Section from '@/components/layouts/Section'
import Connection from '@/components/users/Connection'
import Breadcrumb from '@/components/viewParts/Breadcrumb'
</script>

<template>
  <Base>
    <Breadcrumb />
    <Section>
      <Connection heading-title="フォロー一覧" />
    </Section>
  </Base>
</template>
