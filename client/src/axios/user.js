import {axios} from '@/axios/index'

export const user = {
    find(inputs) {
        return axios.base.get('find/users', {params: inputs})
    },
}
