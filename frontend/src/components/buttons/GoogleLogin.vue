<template>
  <button
    class="btn primary-text-color hover:opacity-75 grid w-full grid-cols-4 mt-5 normal-case shadow"
  >
    <img :src="require(`@/../public/img/google.png`)" class="w-7 h-7 ml-1" alt="google logo" />
    <span class="col-span-2 text-current">ログイン with Google</span>
  </button>
</template>

<style lang="scss" scoped>
$google-color: #ffffff;

.btn {
  background: $google-color;
  border: $google-color;

  &:hover {
    background: $google-color;
  }
}
</style>
