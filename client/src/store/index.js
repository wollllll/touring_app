import { auth as authAxios } from '@/axios/auth'
import { authService } from '@/services/authService'
import { auth } from '@/store/auth'
import { modal } from '@/store/modal'
import { spot } from '@/store/spot'
import { createStore } from 'vuex'

const token = localStorage.getItem('token')
if (token) {
  authAxios
    .get(token)
    .then((response) => {
      authService.commit.setToken(token)
      authService.commit.setAuth(response.data.auth)
    })
    .catch((error) => console.log(error))
}

export const store = createStore({
  modules: {
    modal,
    spot,
    auth,
  },
})
