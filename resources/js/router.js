import Vue from 'vue';
import VueRouter from 'vue-router'
import Dashboard from './components/Dashboard'; // path to vue-router export

Vue.use(VueRouter)

const routes = [
    {
      path: '/dashboard',
      name: 'Dashboard',
      component: Dashboard
    },
    {
      path: '/news',
      name: 'News',
      component: () => import(/* webpackChunkName: "about" */ './components/newscomponent.vue')
    },
    {
      path: '/cruds',
      name: 'Cruds',
      component: () => import(/* webpackChunkName: "about" */ './components/cruds/crud.vue')
    }
  ]
  const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
  })
  export default router

