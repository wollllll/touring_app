export const auth = {
  namespaced: true,
  state: {
    auth: null,
  },
  getters: {
    auth: (state) => state.auth,
  },
  mutations: {
    setAuth(state, user) {
      state.auth = user
    },
  },
}
