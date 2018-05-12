
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Toasted from 'vue-toasted';

window.Vue = require('vue');

Vue.use(Toasted);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import BidForm from './components/BidForm';
import ClientForm from './components/admin/ClientForm';


const app = new Vue({
    el: '#app',

    data: {
    	curpage: '',
    },

    components: {
    	'bidform':BidForm,
        'clientform': ClientForm
    },

    methods: {
    	active(page) {
    		this.curpage=page;
    	}
    }
});
