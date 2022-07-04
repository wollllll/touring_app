export const auth = {
  namespaced: true,
  state: {
    auth: null,
  },
  getters: {
    auth(state) {
      return state.auth
    },
  },
  mutations: {
    setAuth(state, auth) {
      state.auth = auth
    },
  },
}
