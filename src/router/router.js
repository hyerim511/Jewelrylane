import AboutPage from './../components/pages/aboutPage.vue'
// import LandingPage from '../components/pages/landingPage.vue'
// import GalleryPage from './../components/pages/GalleryPage.vue';
// import ContactPage from './../components/pages/ContactPage.vue';
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: "/about",
        name: "AboutPage",
        component: AboutPage
    }
    // {
    //     path: '/',
    //     name: 'Home',
    //     component: LandingPage
    // }
    
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;