import { createApp } from 'vue'
import App from './App.vue'
import router from './router/router';

const app = createApp(App);
app.use(router);
app.mount("#app");

// import * as Vue from "vue";
// import App from "./App.vue";
// import "./registerServiceWorker";
// import router from "./router";
// import store from "./store";

// import { createApp } from 'vue'
// // import * as Vue from "vue";
// import App from './App.vue'

// import VueRouter from 'vue-router'
// const app = Vue.createApp(App).use(VueRouter);
// app.mount("#app");
// Vue.use(VueRouter)

// const app = Vue.createApp(App).use(i18n);
// app.use(store).use(router).use(PrimeVue);
// app.use(ToastService);
// app.use(ConfirmationService);
// app.directive("badge", BadgeDirective);
// app.directive("tooltip", Tooltip);
// app.mount("#app");

// createApp(App).mount('#app')
