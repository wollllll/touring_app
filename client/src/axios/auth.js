import { axios } from '@/axios/index'
import { authService } from '@/services/authService'

axios.base
  .get('api/get/auth')
  .then((response) => authService.commit.setAuth(response.data.auth))
  .catch((error) => console.log(error))

export const auth = {
  login(data) {
    console.log(data)
    axios.csrf()

    return axios.base.post('api/login', {
      email: data.email,
      password: data.password,
    })
  },
  logout() {
    return axios.base.post('api/logout')
  },
  get() {
    return axios.base.get('api/get/auth')
  },
}
