import { store } from '@/store'
import { computed } from 'vue'

export const modalService = {
  getters: {
    isShownSpotByShow() {
      return computed(() => store.getters['modal/isShownSpotByShow'])
    },
    isShownSpotByCreate() {
      return computed(() => store.getters['modal/isShownSpotByCreate'])
    },
    isShownSpotByEdit() {
      return computed(() => store.getters['modal/isShownSpotByEdit'])
    },
    isShownSearch() {
      return computed(() => store.getters['modal/isShownSearch'])
    },
  },
  commit: {
    setIsShownSpotByShow(bool) {
      store.commit('modal/setIsShownSpotByShow', bool)
    },
    setIsShownSpotByCreate(bool) {
      store.commit('modal/setIsShownSpotByCreate', bool)
    },
    setIsShownSpotByEdit(bool) {
      store.commit('modal/setIsShownSpotByEdit', bool)
    },
    setIsShownSearch(bool) {
      store.commit('modal/setIsShownSearch', bool)
    },
  },
}
