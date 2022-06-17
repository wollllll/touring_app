import Axios from 'axios'

const base = Axios.create({
  baseURL: process.env.VUE_APP_API_URL,
  headers: { 'X-Requested-With': 'XMLHttpRequest' },
  withCredentials: true,
})

export const axios = {
  base,
}
