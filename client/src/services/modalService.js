import { store } from '@/store'
import { computed } from 'vue'

export const modalService = {
  getters: {
    isShownSpotByCreate() {
      return computed(() => store.getters['modal/isShownSpotByCreate'])
    },
    isShownSpotByShow() {
      return computed(() => store.getters['modal/isShownSpotByShow'])
    },
    isShownSearch() {
      return computed(() => store.getters['modal/isShownSearch'])
    },
  },
  commit: {
    setIsShownSpotByCreate(bool) {
      store.commit('modal/setIsShownSpotByCreate', bool)
    },
    setIsShownSpotByShow(bool) {
      store.commit('modal/setIsShownSpotByShow', bool)
    },
    setIsShownSearch(bool) {
      store.commit('modal/setIsShownSearch', bool)
    },
  },
}
