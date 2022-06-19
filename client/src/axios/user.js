import { axios } from '@/axios/index'

export const user = {
  find: async (inputs) => {
    return await axios.base.get('find/users', { params: inputs })
  },
}
