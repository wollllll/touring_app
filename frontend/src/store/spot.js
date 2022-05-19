export const spot = {
  namespaced: true,
  state: {
    showSpot: {},
  },
  getters: {
    showSpot: (state) => state.showSpot,
  },
  mutations: {
    setShowSpot(state, spot) {
      state.showSpot = spot
    },
  },
}
