export const modal = {
  namespaced: true,
  state: {
    isShownCreateSpot: false,
    isShownSpot: false,
    isShownSearch: false,
  },
  getters: {
    isShownCreateSpot: (state) => state.isShownCreateSpot,
    isShownSpot: (state) => state.isShownSpot,
    isShownSearch: (state) => state.isShownSearch,
  },
  mutations: {
    setIsShownCreateSpot(state, bool) {
      state.isShownCreateSpot = bool
    },
    setIsShownSpot(state, bool) {
      state.isShownSpot = bool
    },
    setIsShownSearch(state, bool) {
      state.isShownSearch = bool
    },
  },
}
