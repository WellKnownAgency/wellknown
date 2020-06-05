require("./bootstrap-other");

window.Vue = require("vue");

Vue.component("contact-form", require("./components/FormWizard.vue"));
Vue.component("tab", require("./components/Tab.vue"));

import SNotify from "vue-snotify";
import "vue-snotify/styles/material.css";
Vue.use(SNotify, {
    toast: {
        position: "rightTop"
    }
});

const app = new Vue({
    el: "#app"
});
