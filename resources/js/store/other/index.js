export default {
    namespaced: true,
    state: {
        appUrl: process.env.APP_URL || '',
        appName: process.env.APP_NAME || '',
        loading: false,
        snackbar: {
            show: false,
            text: '',
            color: '',
            timeout: 6000,
        },
        dialog: {
            show: false,
            title: '',
            text: '',
            color: '',
            timeout: 6000,
        },   
    },
    getters: {
        appUrl: state => state.appUrl,
        appName: state => state.appName,
        loading: state => state.loading,
        snackbar: state => state.snackbar,
        dialog: state => state.dialog,
    },
    mutations: {
        setAppUrl(state, payload) {
            state.appUrl = payload;
        },
        setAppName(state, payload) {
            state.appName = payload;
        },
        setLoading(state, payload) {
            state.loading = payload;
        },
        setSnackbar(state, payload) {
            state.snackbar = payload;
        },
        setDialog(state, payload) {
            state.dialog = payload;
        }
    },
    actions: {
        setAppUrl({ commit }, payload) {
            commit('setAppUrl', payload);
        },
        setAppName({ commit }, payload) {
            commit('setAppName', payload);
        },
        setSnackbar({ commit }, payload) {
            commit('setSnackbar', payload);
        },
        setDialog({ commit }, payload) {
            commit('setDialog', payload);
        }
    }
}