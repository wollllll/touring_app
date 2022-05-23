import { axios } from '@/axios/index'

export const auth = {
  login(data) {
    return axios.base.post('login', {
      email: data.email,
      password: data.password,
    })
  },
  logout(token) {
    return axios.base.post(
      'logout',
      {},
      {
        headers: {
          Authorization: `Bearer ${token}`,
        },
      }
    )
  },
  get(token) {
    return axios.base.get('get/auth', {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    })
  },
}
