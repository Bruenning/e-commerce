import Vuex from 'vuex';
import dotenv from 'dotenv';

dotenv.config();

export default new Vuex.Store ({
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
        user: {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
            token: '',

        },
        userLogged: false,
        login: {
            email: '',
            password: '',
        },
        logout: {
            token: '',
        },
    },
    getters: {
        appUrl: state => state.appUrl,
        appName: state => state.appName,
        loading: state => state.loading,
        snackbar: state => state.snackbar,
        dialog: state => state.dialog,
        user: state => state.user,
        userLogged: state => state.userLogged,
        login: state => state.login,
        logout: state => state.logout,
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
        },
        setUser(state, payload) {
            state.user = payload;
        },
        setUserLogged(state, payload) {
            state.userLogged = payload;
        },
        serLogin(state, payload) {
            state.login = payload;
        },
        setLogout(state, payload) {
            state.logout = payload;
        }
    },
    actions: {
        setAppUrl({ commit }, payload) {
            commit('setAppUrl', payload);
        },
        setAppName({ commit }, payload) {
            commit('setAppName', payload);
        },
        setLoading({ commit }, payload) {
            commit('setLoading', payload);
        },
        setSnackbar({ commit }, payload) {
            commit('setSnackbar', payload);
        },
        setDialog({ commit }, payload) {
            commit('setDialog', payload);
        },
        setUser({ commit }, payload) {
            commit('setUser', payload);
        },
        setUserLogged({ commit }, payload) {
            commit('setUserLogged', payload);
        },
        setLogin({ commit }, payload) {
            commit('setLogin', payload);
        },
        setLogout({ commit }, payload) {
            commit('setLogout', payload);
        }
    },
        
})