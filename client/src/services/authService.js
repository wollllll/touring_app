import { alertHelper } from '@/Helpers/AlertHepler'
import { auth } from '@/axios/auth'
import { alertService } from '@/services/alertService'
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
      .catch((error) => console.log(error))
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
    setAuth(user) {
      store.commit('auth/setAuth', user)
    },
  },
}
