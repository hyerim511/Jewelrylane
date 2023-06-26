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
            {name: 'Pic1', File: '../../assets/img/hero1.png'},
            {name: 'Pic2', File: '../../assets/img/hero2.png'},
            {name: 'Pic3', File: '../../assets/img/hero3.png'}
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

