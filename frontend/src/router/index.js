import auth from '@/pages/auth'
import complete from '@/pages/auth/complete'
import confirm from '@/pages/auth/confirm'
import register from '@/pages/auth/register'
import setting from '@/pages/auth/setting'
import top from '@/pages/top'
import userEdit from '@/pages/users/edit'
import userFollow from '@/pages/users/follow'
import userFollower from '@/pages/users/follower'
import userShow from '@/pages/users/show'
import { createRouter, createWebHistory } from 'vue-router'

export const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'top',
      component: top,
    },
    {
      path: '/auth',
      name: 'auth_index',
      component: auth,
    },
    {
      path: '/auth/register',
      name: 'auth_register',
      component: register,
    },
    {
      path: '/auth/confirm',
      name: 'auth_confirm',
      component: confirm,
    },
    {
      path: '/auth/setting',
      name: 'auth_setting',
      component: setting,
    },
    {
      path: '/auth/complete',
      name: 'auth_complete',
      component: complete,
    },
    {
      path: '/users/:id',
      name: 'user_show',
      component: userShow,
    },
    {
      path: '/users/:id/edit',
      name: 'user_edit',
      component: userEdit,
    },
    {
      path: '/users/:id/follow',
      name: 'user_follow',
      component: userFollow,
    },
    {
      path: '/users/:id/follower',
      name: 'user_follower',
      component: userFollower,
    },
  ],
})
