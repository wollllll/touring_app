export const spot = {
  namespaced: true,
  state: {
    spots: [],
    spot: {},
  },
  getters: {
    spots: (state) => state.spots,
    spot: (state) => state.spot,
  },
  mutations: {
    setSpots(state, spots) {
      state.spots = spots
    },
    setSpot(state, spot) {
      state.spot = spot
    },
  },
}
