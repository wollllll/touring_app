import { axios } from '@/axios/index'

export const spot = {
  get() {
    return axios.base.get('api/spots')
  },
  store(inputs) {
    return axios.base.post('api/spots', inputs)
  },
}
