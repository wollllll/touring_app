import { store } from '@/store'
import { computed } from 'vue'

export const storeService = {
  getters: {
    isCreateSpotModal() {
      return computed(() => store.getters['modal/isCreateSpotModal'])
    },
    isShowSpotModal() {
      return computed(() => store.getters['modal/isShowSpotModal'])
    },
    isShowSearchModal() {
      return computed(() => store.getters['modal/isShowSearchModal'])
    },
  },
  commit: {
    setIsCreateSpotModal(bool) {
      store.commit('modal/setIsCreateSpotModal', bool)
    },
    setIsShowSpotModal(bool) {
      store.commit('modal/setIsShowSpotModal', bool)
    },
    setIsShowSearchModal(bool) {
      store.commit('modal/setIsShowSearchModal', bool)
    },
  },
}
