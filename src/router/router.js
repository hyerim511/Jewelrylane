import HomePage from '../components/pages/้HomePage.vue'
import AboutPage from '../components/pages/AboutPage.vue'
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: "/",
        name: "HomePage",
        component: HomePage,
    },  
    {
        path: "/about",
        name: "AboutPage",
        component: AboutPage
    }
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;