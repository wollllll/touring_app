import { axios } from '@/axios/index'

export const spot = {
    get() {
        return axios.base.get('api/get/spots')
    },
}
