import { store } from '@/store'
import { computed } from 'vue'

export const alertService = {
  getters: {
    isShownSuccess() {
      return computed(() => store.getters['alert/isShownSuccess'])
    },
    isShownError() {
      return store.getters['alert/isShownError']
    },
    successText() {
      return computed(() => store.getters['alert/successText'])
    },
    errorText() {
      return store.getters['alert/errorText']
    },
  },
  commit: {
    setIsShownSuccess(bool) {
      store.commit('alert/setIsShownSuccess', bool)
    },
    setIsShownError(bool) {
      store.commit('alert/setIsShownError', bool)
    },
    setSuccessText(text) {
      store.commit('alert/setSuccessText', text)
    },
    setErrorText(text) {
      store.commit('alert/setErrorText', text)
    },
  },
}
