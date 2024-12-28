import { createApp } from 'vue'
import { createRouter, createWebHashHistory } from 'vue-router'
import App from './App.vue'
import Home from './views/Home.vue'
import Useful from './views/Useful.vue'

const router = createRouter({
  history: createWebHashHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/useful',
      name: 'useful',
      component: Useful
    }
  ]
})

const app = createApp(App)
app.use(router)
app.mount('#content-nextrag')