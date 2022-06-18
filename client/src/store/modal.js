export const modal = {
  namespaced: true,
  state: {
    isShownSpotByCreate: false,
    isShownSpotByShow: false,
    isShownSearch: false,
  },
  getters: {
    isShownSpotByCreate: (state) => state.isShownSpotByCreate,
    isShownSpotByShow: (state) => state.isShownSpotByShow,
    isShownSearch: (state) => state.isShownSearch,
  },
  mutations: {
    setIsShownSpotByCreate(state, bool) {
      state.isShownSpotByCreate = bool
    },
    setIsShownSpotByShow(state, bool) {
      state.isShownSpotByShow = bool
    },
    setIsShownSearch(state, bool) {
      state.isShownSearch = bool
    },
  },
}
