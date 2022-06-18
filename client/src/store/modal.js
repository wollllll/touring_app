export const modal = {
  namespaced: true,
  state: {
    isShownSpotByShow: false,
    isShownSpotByCreate: false,
    isShownSpotByEdit: false,
    isShownSearch: false,
  },
  getters: {
    isShownSpotByShow: (state) => state.isShownSpotByShow,
    isShownSpotByCreate: (state) => state.isShownSpotByCreate,
    isShownSpotByEdit: (state) => state.isShownSpotByEdit,
    isShownSearch: (state) => state.isShownSearch,
  },
  mutations: {
    setIsShownSpotByShow(state, bool) {
      state.isShownSpotByShow = bool
    },
    setIsShownSpotByCreate(state, bool) {
      state.isShownSpotByCreate = bool
    },
    setIsShownSpotByEdit(state, bool) {
      state.isShownSpotByEdit = bool
    },
    setIsShownSearch(state, bool) {
      state.isShownSearch = bool
    },
  },
}
