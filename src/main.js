import Vue from 'vue'
import App from './App.vue'
import router from './router'
import { translate, translatePlural } from '@nextcloud/l10n'

// Add global translations
Vue.prototype.t = translate
Vue.prototype.n = translatePlural

export default new Vue({
	el: '#content',
	router,
	render: h => h(App),
})