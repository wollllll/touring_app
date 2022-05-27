import { store } from '@/store'
import { computed } from 'vue'

export const alertService = {
  getters: {
    isShownSuccess() {
      return computed(() => store.getters['alert/isShownSuccess'])
    },
    successText() {
      return computed(() => store.getters['alert/successText'])
    },
  },
  commit: {
    setIsShownSuccess(bool) {
      store.commit('alert/setIsShownSuccess', bool)
    },
    setSuccessText(text) {
      store.commit('alert/setSuccessText', text)
    },
  },
}
