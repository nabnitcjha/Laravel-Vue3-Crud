import './assets/main.css'
import * as Vue from 'vue' // in Vue 3
import axios from 'axios'
import VueAxios from 'vue-axios'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

const app = createApp(App)


app.use(createPinia())
app.use(VueAxios, axios)
app.provide('axios', app.config.globalProperties.axios)
app.use(router)

app.mount('.page-wrapper')
