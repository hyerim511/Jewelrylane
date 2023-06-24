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
            {name: 'Pic1', File: '/img/hero1.5b9a98d5.png'},
            {name: 'Pic2', File: '/img/hero2.d324d02c.png'},
            {name: 'Pic3', File: '/img/hero3.63da2135.png'}
        ]);

        //return the data that have set in setup
        return {
            Pagination,
            Navigation,
            slideImg
        };
    },
};
</script>

