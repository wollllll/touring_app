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
        alertService.commit.setIsShownSuccess(true)
        alertService.commit.setSuccessText('ログインしました。')

        setTimeout(() => {
          alertService.commit.setIsShownSuccess(false)
          alertService.commit.setSuccessText('')
        }, 3000)
      })
      .catch((error) => console.log(error))
  },
  logout() {
    auth
      .logout()
      .then(() => {
        authService.commit.setAuth(null)
        alertService.commit.setIsShownSuccess(true)
        alertService.commit.setSuccessText('ログアウトしました。')
        setTimeout(() => {
          alertService.commit.setIsShownSuccess(false)
          alertService.commit.setSuccessText('')
        }, 3000)
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
