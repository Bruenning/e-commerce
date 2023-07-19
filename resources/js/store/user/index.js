export default {
    namespaced: true,
    state: {
        user: {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
            token: '',

        },
    },
    getters: {
        user: state => state.user,
    },
    mutations: {
        setUser(state, payload) {
            state.user = payload;
        }
    },
    actions: {
        setUser({ commit }, payload) {
            commit('setUser', payload);
        }
    }
}