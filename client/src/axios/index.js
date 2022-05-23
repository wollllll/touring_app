import Axios from 'axios'

const base = Axios.create({
  baseURL: 'http://192.168.33.10/api/',
  headers: { 'X-Requested-With': 'XMLHttpRequest' },
  withCredentials: true,
})

const csrf = () => base.get('sanctum/csrf-cookie')

export const axios = {
  base,
  csrf,
}
