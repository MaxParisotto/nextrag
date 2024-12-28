import Vue from 'vue'
import Router from 'vue-router'

// Import your view components here
const All = () => import('./views/All.vue')
const Favorites = () => import('./views/Favorites.vue')

Vue.use(Router)

export default new Router({
	routes: [
		{
			path: '/',
			name: 'all',
			component: All,
		},
		{
			path: '/favorites',
			name: 'favorites',
			component: Favorites,
		},
	],
})
