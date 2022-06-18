import { alertService } from '@/services/alertService'

export const alertHelper = {
  success(text, ms = 3000) {
    alertService.commit.setIsShownSuccess(true)
    alertService.commit.setSuccessText(text)
    setTimeout(() => {
      alertService.commit.setIsShownSuccess(false)
      alertService.commit.setSuccessText('')
    }, ms)
  },
}
