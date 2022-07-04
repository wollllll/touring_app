export const alert = {
  namespaced: true,
  state: {
    isShownError: false,
    isShownSuccess: false,
    successText: '',
    errorText: '',
  },
  getters: {
    isShownSuccess: (state) => state.isShownSuccess,
    isShownError: (state) => state.isShownError,
    successText: (state) => state.successText,
    errorText: (state) => state.errorText,
  },
  mutations: {
    setIsShownSuccess(state, bool) {
      state.isShownSuccess = bool
    },
    setIsShownError(state, bool) {
      state.isShownError = bool
    },
    setSuccessText(state, text) {
      state.successText = text
    },
    setErrorText(state, text) {
      state.errorText = text
    },
  },
}
