import './bootstrap';
import { createApp } from 'vue';
import { Collection, collect } from 'collect.js'

import router from './router.js';

import App from './main/App.vue';

import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'


import 'bootstrap/dist/css/bootstrap.css'
import 'jquery/dist/jquery.js'
import 'bootstrap/dist/js/bootstrap.js'

import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import 'vuetify/dist/vuetify.min.css';

const vuetify = createVuetify({
    components,
    directives,
    icons: {
        iconfont: 'fa',
    },
});

const component = require('./scripts/components.js')

const app = createApp(App);


app
    .use(vuetify)
    .use(router)

//components
app.component('Vinput', component.Vinput)
app.component('Vbutton', component.Vbutton)
app.component('Vselect', component.Vselect)
app.component('Vcol', component.Vcol)
app.component('Vrow', component.Vrow)
app.component('Vcontainer', component.Vcontainer)
app.component('Vform', component.Vform)
app.component('Vsnackbar', component.Vsnackbar)
app.component('Vdialog', component.Vdialog)
app.component('VueDatePicker', VueDatePicker)


//pages
app.component('App', App)
app.component('Home', component.Home)
app.component('NotFound', component.NotFound)



app.config.globalProperties.collect = collect;
app.config.globalProperties.collection = Collection;

app.mount('#app');


export default {
    publicPath: '/public/'
}