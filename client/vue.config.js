const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  outputDir: '../backend/public/assets',
  publicPath: process.env.NODE_ENV === 'production'
      ? '/assets'
      : '/',
    indexPath: process.env.NODE_ENV === 'production'
        ? '../../resources/views/index.blade.php'
        : 'index.html'
})
