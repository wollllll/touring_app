import App from './App.vue'
import './assets/css/base.scss'
import { router } from '@/router'
import { middleware } from '@/router/middleware'
import 'bootstrap-icons/font/bootstrap-icons.css'
import { createApp } from 'vue'

createApp(App).use(router).mount('#app')
middleware()
