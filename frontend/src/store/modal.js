export const modal = {
  namespaced: true,
  state: {
    isCreateSpotModal: false,
    isShowSpotModal: false,
    isShowSearchModal: false,
  },
  getters: {
    isCreateSpotModal: (state) => state.isCreateSpotModal,
    isShowSpotModal: (state) => state.isShowSpotModal,
    isShowSearchModal: (state) => state.isShowSearchModal,
  },
  mutations: {
    setIsCreateSpotModal(state, bool) {
      state.isCreateSpotModal = bool
    },
    setIsShowSpotModal(state, bool) {
      state.isShowSpotModal = bool
    },
    setIsShowSearchModal(state, bool) {
      state.isShowSearchModal = bool
    },
  },
}
