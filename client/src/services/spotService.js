import { spot } from '@/axios/spot'
import { store } from '@/store'
import { computed } from 'vue'

export const spotService = {
  /**
   * スポットの保存
   *
   * @param inputs
   */
  store(inputs) {
    spot
      .store(inputs)
      .then((response) => {
        spotService.getters.spots().value.push(response.data.spot)
      })
      .catch((error) => console.log(error))
  },
  getters: {
    spots() {
      return computed(() => store.getters['spot/spots'])
    },
    /**
     * スポットの詳細を取得
     *
     * @returns {any}
     */
    showSpot() {
      return computed(() => store.getters['spot/spot'])
    },
  },
  commit: {
    setSpots(spots) {
      store.commit('spot/setSpots', spots)
    },
    /**
     * スポットの詳細を保存
     *
     * @param spot
     */
    setShowSpot(spot) {
      store.commit('spot/setSpot', spot)
    },
  },
}
