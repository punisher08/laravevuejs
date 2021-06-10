import Vue from 'vue';
import VueRouter from 'vue-router'
import Dashboard from './components/pages/Dashboard'; // path to vue-router export

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
      component: () => import('./components/news/NewsComponent.vue')
    },
    {
      path: '/cruds',
      name: 'Cruds',
      component: () => import('./components/cruds/crud.vue')
    },
    {
      path: '/edit',
      name: 'Edit',
      component: () => import('./components/cruds/edit.vue')
    },
  ]
  const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
  })
  export default router

