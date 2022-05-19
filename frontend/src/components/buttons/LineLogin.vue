<template>
  <button
    class="btn hover:opacity-75 grid w-full grid-cols-4 mt-5 normal-case shadow"
  >
    <img :src="require(`@/../public/img/line.png`)" class="w-10 h-10" alt="line logo" />
    <span class="col-span-2">ログイン with LINE</span>
  </button>
</template>

<style lang="scss" scoped>
$line-color: #06c655;

.btn {
  background: $line-color;
  border: $line-color;

  &:hover {
    background: $line-color;
  }
}
</style>
