import { axios } from '@/axios/index'

export const spot = {
  get: async () => {
    return await axios.base.get('spots')
  },
  store: async (inputs) => {
    return await axios.base.post('spots', inputs)
  },
  update: async (id, inputs) => {
    return await axios.base.patch(`spots/${id}`, inputs)
  },
  delete: async (id) => {
    return await axios.base.delete(`spots/${id}`)
  },
  getByUserId: async (params) => {
    return await axios.base.get('get/spots/by_user_id', { params })
  },
}
