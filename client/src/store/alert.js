export const alert = {
  namespaced: true,
  state: {
    isShownSuccess: false,
    successText: '',
  },
  getters: {
    isShownSuccess: (state) => state.isShownSuccess,
    successText: (state) => state.successText,
  },
  mutations: {
    setIsShownSuccess(state, bool) {
      state.isShownSuccess = bool
    },
    setSuccessText(state, text) {
      state.successText = text
    },
  },
}
