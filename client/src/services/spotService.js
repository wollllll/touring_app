import { spot } from '@/axios/spot'
import { alertService } from '@/services/alertService'
import { modalService } from '@/services/modalService'
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
        modalService.commit.setIsShownCreateSpot(false)
        alertService.commit.setIsShownSuccess(true)
        alertService.commit.setSuccessText('スポットを投稿しました！')
        setTimeout(() => {
          alertService.commit.setIsShownSuccess(false)
          alertService.commit.setSuccessText('')
        }, 3000)
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
