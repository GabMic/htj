require('./bootstrap');
import Vue from 'vue';

import Buefy from "buefy";
export const EventBus = new Vue();
Vue.use(Buefy);

import Flash from "./components/Flash";

Vue.component('flash', Flash);
const app = new Vue({
    el: '#app',
});
