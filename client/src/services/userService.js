import { alertHelper } from '@/Helpers/AlertHepler'
import { user } from '@/axios/user'

export const userService = {
  update(id, inputs) {
    user
      .update(id, inputs)
      .then((response) => {
        const data = response.data

        alertHelper.success(data.message)
      })
      .catch((error) => console.log(error))
  },
}
