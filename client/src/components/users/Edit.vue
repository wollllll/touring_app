<script setup>
import PrimaryButton from '@/components/buttons/PrimaryButton'
import FormControl from '@/components/formParts/FormControl'
import Input from '@/components/formParts/Input'
import Label from '@/components/formParts/Label'
import TextArea from '@/components/formParts/TextArea'
import Avatar from '@/components/users/Avatar'
import IconWithText from '@/components/viewParts/IconWithText'
import { authService } from '@/services/authService'
import { computed } from 'vue'

const auth = computed(() => authService.getters.auth().value)
</script>

<template>
  <div class="md:flex mt-5">
    <div class="text-center">
      <Avatar class="btn btn-ghost btn-circle md:w-28 md:h-28 w-24 h-24" />
      <div>
        <button type="button" class="hover:opacity-75">変更</button>
      </div>
    </div>
    <div class="md:ml-20 w-full">
      <FormControl>
        <template #label>
          <Label for="edit_user_name" :required="true">ユーザー名</Label>
        </template>
        <template #input>
          <Input
            type="text"
            id="edit_user_name"
            placeholder="ユーザー名"
            v-model="auth.name"
          />
        </template>
      </FormControl>
      <FormControl>
        <template #label>
          <Label for="edit_user_email" :required="true">メールアドレス</Label>
        </template>
        <template #input>
          <Input
            type="email"
            id="edit_user_email"
            placeholder="メールアドレス"
            v-model="auth.email"
          />
        </template>
      </FormControl>
      <FormControl>
        <template #label>
          <Label for="edit_user_password" :required="true">パスワード</Label>
        </template>
        <template #input>
          <Input
            type="password"
            id="edit_user_password"
            placeholder="パスワード"
          />
        </template>
      </FormControl>
      <FormControl>
        <template #label>
          <Label for="edit_user_password_confirm" :required="true"
            >パスワード再入力</Label
          >
        </template>
        <template #input>
          <Input
            type="password"
            id="edit_user_password_confirm"
            placeholder="パスワード再入力"
          />
        </template>
      </FormControl>
      <FormControl>
        <template #label>
          <Label for="edit_user_profile" :required="true">プロフィール</Label>
        </template>
        <template #input>
          <TextArea
            label="プロフィール"
            id="edit_user_profile"
            placeholder="プロフィール"
            :rows="5"
            v-model="auth.profile"
          />
        </template>
      </FormControl>
      <div class="mt-5 text-right">
        <PrimaryButton class="w-auto">
          <IconWithText icon-class="bi-save"> 保存 </IconWithText>
        </PrimaryButton>
      </div>
    </div>
  </div>
</template>
