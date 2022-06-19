import { axios } from '@/axios/index'
import { authService } from '@/services/authService'

axios.base
  .get('get/auth')
  .then((response) => authService.commit.setAuth(response.data.auth))
  .catch((error) => console.log(error))

export const auth = {
  login: async (data) => {
    return await axios.base.post('login', {
      email: data.email,
      password: data.password,
    })
  },
  logout: async () => {
    return await axios.base.post('logout')
  },
  get: async () => {
    return await axios.base.get('get/auth')
  },
}
