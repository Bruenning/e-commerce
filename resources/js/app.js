import './bootstrap';
import { createApp } from 'vue';
import { Collection, collect } from 'collect.js'


import router from "./router.js"
import store from "./store"

import App from "./main/App.vue"

import VueDatePicker from "@vuepic/vue-datepicker"
import "@vuepic/vue-datepicker/dist/main.css"

import "bootstrap/dist/css/bootstrap.css"
import "jquery/dist/jquery.js"
import "bootstrap/dist/js/bootstrap.js"


// Vuetify
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import "vuetify/dist/vuetify.min.css"
import '@mdi/font/css/materialdesignicons.css'

const vuetify = createVuetify({
    components,
    directives,
    icons: {
        defaultSet: "mdi",
        iconfont: "mdi",
    },
})

/**
 * início imports
 */
//components
import Vinput from "./components/Vinput.vue"
import Vbutton from "./components/Vbutton.vue"
import Vselect from "./components/Vselect.vue"
import Vcol from "./components/Vcol.vue"
import Vrow from "./components/Vrow.vue"
import Vcontainer from "./components/Vcontainer.vue"
import Vform from "./components/Vform.vue"
import Vsnackbar from "./components/Vsnackbar.vue"
import Vdialog from "./components/Vdialog.vue"
import Vheader from "./components/Vheader.vue"
import Vfooter from "./components/Vfooter.vue"
import FormArray from "./components/FormArray.vue"
import Vtextarea from "./components/Vtextarea.vue"

//pages
import Home from "./Pages/site/Home.vue"
import Contact from "./Pages/site/Contact.vue"
import Login from "./Pages/admin/Login.vue"

import NotFound from "./Pages/NotFound.vue"

/**
 * fim imports
 */

const app = createApp(App)

app .use(vuetify)
    .use(router)
    .use(store)
    .use(store)

//components
app.component("Vinput", Vinput)
app.component("Vbutton", Vbutton)
app.component("Vselect", Vselect)
app.component("Vcol", Vcol)
app.component("Vrow", Vrow)
app.component("Vcontainer", Vcontainer)
app.component("Vform", Vform)
app.component("Vsnackbar", Vsnackbar)
app.component("Vdialog", Vdialog)
app.component("Vheader", Vheader)
app.component("Vfooter", Vfooter)
app.component("FormArray", FormArray)
app.component("Vtextarea", Vtextarea)

app.component("VueDatePicker", VueDatePicker)
app.component('Vinput', Vinput)
app.component('Vbutton', Vbutton)
app.component('Vselect', Vselect)
app.component('Vcol', Vcol)
app.component('Vrow', Vrow)
app.component('Vcontainer', Vcontainer)
app.component('Vform', Vform)
app.component('Vsnackbar', Vsnackbar)
app.component('Vdialog', Vdialog)
app.component('Vheader', Vheader)
app.component('Vfooter', Vfooter)
app.component('FormArray', FormArray)
app.component('Vtextarea', Vtextarea)

app.component('VueDatePicker', VueDatePicker)

/**
 * pages
 */
//page default
app.component("App", App)
app.component("NotFound", NotFound)

//site
app.component("Home", Home)
app.component("contact", Contact)

//admin
app.component("Login", Login)

app.config.productionTip = false

app.config.globalProperties.$version = require("../../package.json").version
app.config.globalProperties.$api = require("./api.js").default
app.config.globalProperties.$collect = collect
app.config.globalProperties.$collection = Collection
app.config.globalProperties.$c = collect

app.mount("#app")
