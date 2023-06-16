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
            {name: 'Pic1', File: 'https://images.pexels.com/photos/9430992/pexels-photo-9430992.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'},
            {name: 'Pic2', File: 'https://images.pexels.com/photos/9431905/pexels-photo-9431905.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'},
            {name: 'Pic3', File: 'https://images.pexels.com/photos/9430429/pexels-photo-9430429.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'}

        ]);

        //return the data that have set in setup
        return {
            slideImg
        };
    },
};
</script>

<style scoped>
/* scoped = for use css only in this page */

    img {
        width: 100%;
        height: 80vh;
    }
</style>