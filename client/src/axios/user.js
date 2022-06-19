import { axios } from '@/axios/index'

export const user = {
  update: async (id, inputs) => {
    return await axios.base.patch(`users/${id}`, inputs)
  },
  find: async (inputs) => {
    return await axios.base.get('find/users', { params: inputs })
  },
}
