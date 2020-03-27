require('./bootstrap');
import Vue from 'vue';

import Buefy from "buefy";
export const EventBus = new Vue();
Vue.use(Buefy);

import Flash from "./components/Flash";
import IntroModal from "./components/IntroModal";

Vue.component('flash', Flash);
Vue.component('intro-modal', IntroModal);
const app = new Vue({
    el: '#app',
});
