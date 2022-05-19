import { store } from '@/store'
import { computed } from 'vue'

export const spotService = {
  getters: {
    /**
     * スポットの詳細を取得
     *
     * @returns {any}
     */
    showSpot() {
      return computed(() => store.getters['spot/showSpot'])
    },
  },
  commit: {
    /**
     * スポットの詳細を保存
     *
     * @param spot
     */
    setShowSpot(spot) {
      store.commit('spot/setShowSpot', spot)
    },
  },
}
