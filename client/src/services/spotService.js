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
        const data = response.data

        spotService.getters.spots().value.push(data.spot)
        spotService.commit.setSpots(spotService.getters.spots().value)
        modalService.commit.setIsShownSpotByCreate(false)
        alertService.commit.setIsShownSuccess(true)
        alertService.commit.setSuccessText(data.message)
        setTimeout(() => {
          alertService.commit.setIsShownSuccess(false)
          alertService.commit.setSuccessText('')
        }, 3000)
      })
      .catch((error) => console.log(error))
  },
  update(id, inputs) {
    spot
      .update(id, inputs)
      .then((response) => {
        const data = response.data

        spotService.commit.setSpot(data.spot)
        modalService.commit.setIsShownSpotByEdit(false)
        modalService.commit.setIsShownSpotByShow(false)
        alertService.commit.setIsShownSuccess(true)
        alertService.commit.setSuccessText(data.message)
        setTimeout(() => {
          alertService.commit.setIsShownSuccess(false)
          alertService.commit.setSuccessText('')
        }, 3000)
      })
      .catch((error) => console.log(error))
  },
  delete(id) {
    spot
      .delete(id)
      .then((response) => {
        const spots = spotService.getters
          .spots()
          .value.filter((spot) => spot.id !== id)

        spotService.commit.setSpot({})
        spotService.commit.setSpots(spots)
        modalService.commit.setIsShownSpotByDestroy(false)
        modalService.commit.setIsShownSpotByShow(false)
        alertService.commit.setIsShownSuccess(true)
        alertService.commit.setSuccessText(response.data.message)
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
    spot() {
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
    setSpot(spot) {
      store.commit('spot/setSpot', spot)
    },
  },
}
