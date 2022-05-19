const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  outputDir: '../public/assets',
  publicPath: '/assets',
  pages: {
    app: {
      entry: 'src/main.js',
      template: 'template/index.html',
      filename: `../../resources/views/app.blade.php`,
    },
  },
})
