require("./bootstrap-other");

window.Vue = require("vue");

Vue.component("form-wizard", require("./components/FormWizard.vue"));
Vue.component("tab", require("./components/Tab.vue"));

import Vuelidate from "vuelidate";
Vue.use(Vuelidate);

const app = new Vue({
    el: "#app"
});
