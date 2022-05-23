export const auth = {
  namespaced: true,
  state: {
    token: null,
    auth: null,
  },
  getters: {
    token: (state) => state.token,
    auth: (state) => state.auth,
  },
  mutations: {
    setToken(state, token) {
      state.token = token
    },
    setAuth(state, user) {
      state.auth = user
    },
  },
}
