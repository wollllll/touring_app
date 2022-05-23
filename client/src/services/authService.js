import { store } from '@/store'
import { computed } from 'vue'

export const authService = {
  getters: {
    token() {
      return computed(() => store.getters['auth/token'])
    },
    auth() {
      return computed(() => store.getters['auth/auth'])
    },
  },
  commit: {
    setToken(token) {
      store.commit('auth/setToken', token)
    },
    setAuth(user) {
      store.commit('auth/setAuth', user)
    },
  },
}
