import HomePage from '../components/pages/homePage.vue'
import AboutPage from '../components/pages/aboutPage.vue'
import ProductDetails from '../components/pages/productDetails.vue'
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
        path: '/productDetails/:id',
        name: 'ProductDetails',
        component: ProductDetails
    }
    
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;