require('./bootstrap');

// window.Vue = require('vue');

import Vue from 'vue';
import moment from 'moment';

Vue.use(require('vue-resource'));

Vue.component('market', require('./components/Market.vue'));
Vue.component('commonkiveo', require('./components/CommonKiveo.vue'));
Vue.component('metadeocommon', require('./components/CommonMetadeo.vue'));
Vue.component('createmarket', require('./components/Createmarket.vue'));



const app = new Vue({
    el: '#app',
    methods: {
        moment: function (date) {
            return moment(date);
        },

        date: function (date) {
            return moment(date).format('h:mm:ss a');
        }
    },
    filters: {
        moment: function (date) {
            return moment(date).format('h:mm:ss a');
        }
    }
});
