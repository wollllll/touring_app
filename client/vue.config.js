const {defineConfig} = require('@vue/cli-service')
module.exports = defineConfig({
    transpileDependencies: true,
    outputDir: '../public/assets',
    publicPath: process.env.NODE_ENV === 'production'
        ? '/assets'
        : '/',
    indexPath: process.env.NODE_ENV === 'production'
        ? '../../resources/views/index.blade.php'
        : 'index.html',
    devServer: {
        proxy: {
            'api': {
                target: 'http://localhost:80'
            },
            'sanctum/csrf-cookie': {
                target: 'http://localhost:80'
            }
        }
    }
})
