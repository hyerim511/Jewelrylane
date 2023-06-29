import HomePage from '../components/pages/HomePage.vue'
import AboutPage from '../components/pages/AboutPage.vue'
import BookingPage from '../components/pages/BookingPage.vue'
import ProductCart from '../components/pages/ProductCart.vue'
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
    },
    {
        path: "/booking",
        name: "BookingPage",
        component: BookingPage
    },
    {
        path: "/cart",
        name: "ProductCart",
        component: ProductCart
    }
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;