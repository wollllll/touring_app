import { auth } from '@/store/auth'
import { modal } from '@/store/modal'
import { spot } from '@/store/spot'
import { createStore } from 'vuex'

export const store = createStore({
  modules: {
    modal,
    spot,
    auth,
  },
})
