<template>
  <button
    class="btn hover:opacity-75 grid w-full grid-cols-4 mt-5 normal-case shadow"
  >
    <img src="img/twitter.png" class="w-10 h-10" alt="twitter logo" />
    <span class="col-span-2">ログイン with Twitter</span>
  </button>
</template>

<style lang="scss" scoped>
$twitter-color: #1d9bf0;

.btn {
  background: $twitter-color;
  border: $twitter-color;

  &:hover {
    background: $twitter-color;
  }
}
</style>
