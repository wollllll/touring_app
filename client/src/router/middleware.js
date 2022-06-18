import { router } from '@/router/index'
import { modalService } from '@/services/modalService'
import { spotService } from '@/services/spotService'

export const middleware = () => {
  router.beforeEach((to, from, next) => {
    spotService.commit.setSpot({})
    modalService.commit.setIsShownSpotByCreate(false)
    modalService.commit.setIsShownSpotByShow(false)
    modalService.commit.setIsShownSearch(false)

    next()
  })
}
