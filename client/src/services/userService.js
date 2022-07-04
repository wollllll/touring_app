import { user } from '@/axios/user'
import { alertHelper } from '@/helpers/alertHepler'

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
