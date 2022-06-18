import { axios } from '@/axios/index'

export const spot = {
  get() {
    return axios.base.get('spots')
  },
  store(inputs) {
    return axios.base.post('spots', inputs)
  },
  update(id, inputs) {
    return axios.base.patch(`spots/${id}`, inputs)
  },
  delete(id) {
    return axios.base.delete(`spots/${id}`)
  },
  getByUserId(params) {
    return axios.base.get('get/spots/by_user_id', { params })
  },
}
