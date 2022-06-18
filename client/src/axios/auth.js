import { axios } from '@/axios/index'
import { authService } from '@/services/authService'

axios.base
  .get('get/auth')
  .then((response) => authService.commit.setAuth(response.data.auth))
  .catch((error) => console.log(error))

export const auth = {
  login(data) {
    return axios.base.post('login', {
      email: data.email,
      password: data.password,
    })
  },
  logout() {
    return axios.base.post('logout')
  },
  get() {
    return axios.base.get('get/auth')
  },
}
