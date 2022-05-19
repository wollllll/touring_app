import { router } from '@/router/index'
import { spotService } from '@/services/spotService'
import { storeService } from '@/services/storeService'

export const middleware = () => {
  router.beforeEach((to, from, next) => {
    spotService.commit.setShowSpot({})
    storeService.commit.setIsCreateSpotModal(false)
    storeService.commit.setIsShowSpotModal(false)
    storeService.commit.setIsShowSearchModal(false)

    next()
  })
}
