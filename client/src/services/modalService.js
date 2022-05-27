import { store } from '@/store'
import { computed } from 'vue'

export const modalService = {
  getters: {
    isShownCreateSpot() {
      return computed(() => store.getters['modal/isShownCreateSpot'])
    },
    isShownSpot() {
      return computed(() => store.getters['modal/isShownSpot'])
    },
    isShownSearch() {
      return computed(() => store.getters['modal/isShownSearch'])
    },
  },
  commit: {
    setIsShownCreateSpot(bool) {
      store.commit('modal/setIsShownCreateSpot', bool)
    },
    setIsShownSpot(bool) {
      store.commit('modal/setIsShownSpot', bool)
    },
    setIsShownSearch(bool) {
      store.commit('modal/setIsShownSearch', bool)
    },
  },
}
