<template>
    <div class="slides">
        <carousel :items-to-show="1">
            <slide v-for="(item, index) in slideImg" :key="index">
                <img :src="item.File" />
            </slide>

            <template #addons>
                <navigation />
                <pagination />
            </template>
        </carousel>
    </div>
    
</template>
<script>

import { ref } from 'vue';
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';

export default {
    name: 'slideShow',
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,
    },
    setup() {
        const slideImg = ref([
            {name: 'Pic1', File: 'https://images.pexels.com/photos/1449657/pexels-photo-1449657.jpeg?auto=compress&cs=tinysrgb&w=600'},
            {name: 'Pic2', File: 'https://images.pexels.com/photos/265791/pexels-photo-265791.jpeg?auto=compress&cs=tinysrgb&w=600'},
            {name: 'Pic3', File: 'https://images.pexels.com/photos/5705495/pexels-photo-5705495.jpeg?auto=compress&cs=tinysrgb&w=600'}

        ]);

        //return the data that have set in setup
        return {
            slideImg
        };
    },
};
</script>

<style scoped>
/* scoped = for use only in this page */

    img {
        border-radius: 10px;
        width: 100%;
        height: 50vh;
    }
</style>