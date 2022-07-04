import { auth } from '@/axios/auth'
import { alertHelper } from '@/helpers/alertHepler'
import { store } from '@/store'
import { computed } from 'vue'

export const authService = {
  login(inputs) {
    auth
      .login(inputs)
      .then((response) => {
        authService.commit.setAuth(response.data.auth)
        alertHelper.success(response.data.message)
      })
      .catch((error) => {
        console.log(error)
        alertHelper.error(error.response.data.message)
      })
  },
  logout() {
    auth
      .logout()
      .then((response) => {
        authService.commit.setAuth(null)
        alertHelper.success(response.data.message)
      })
      .catch((error) => console.log(error))
  },
  getters: {
    auth() {
      return computed(() => store.getters['auth/auth'])
    },
  },
  commit: {
    setAuth(auth) {
      store.commit('auth/setAuth', auth)
    },
  },
}
