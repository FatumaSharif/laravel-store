require("./bootstrap");
import Vue from "vue";
import VueRouter from "vue-router";
import BootstrapVue from "bootstrap-vue";
import routes from "./routes";

Vue.use(VueRouter);
Vue.use(BootstrapVue);

let app = new Vue({
    el: "#app",

    router: new VueRouter(routes)
});
