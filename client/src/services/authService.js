import { store } from '@/store'
import { computed } from 'vue'

export const authService = {
  getters: {
    auth() {
      return computed(() => store.getters['auth/auth'])
    },
  },
  commit: {
    setAuth(user) {
      store.commit('auth/setAuth', user)
    },
  },
}
