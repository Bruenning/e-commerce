import router from '@/router'

export default {
    namespaced: true,
    state: {
        authenticated: false,
        user: {
            login: {
                email: '',
                password: '',
                token: '',
            },
        }
    }
}
