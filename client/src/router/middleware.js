import { router } from '@/router/index'
import { modalService } from '@/services/modalService'
import { spotService } from '@/services/spotService'

export const middleware = () => {
  router.beforeEach((to, from, next) => {
    spotService.commit.setShowSpot({})
    modalService.commit.setIsShownCreateSpot(false)
    modalService.commit.setIsShownSpot(false)
    modalService.commit.setIsShownSearch(false)

    next()
  })
}
