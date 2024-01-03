import Vuex from "vuex"
import dotenv from "dotenv"

import createPersistedState from "vuex-persistedstate"

import auth from "./auth"
import user from "./user"
import other from "./other"

dotenv.config()

export default new Vuex.Store({
    plugins: [createPersistedState()],
    modules: {
        auth,
        user,
        other,
    },
})
