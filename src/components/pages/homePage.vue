<template>
    <div>
        <SlideShow />
        <MainContent :catalog="catalog"/>
    </div>
</template>

<script>
import SlideShow from '../layout/slideShow.vue';
import MainContent from '../layout/MainContent.vue'
    export default {
        name: 'HomePage',
        components: {
            SlideShow, 
            MainContent,
        },
        data() {
            return {
                catalog: [],
                catalogApi:
                "http://localhost/final-jewelrylane/api/jewelryApi/jewelry.php",
            };
        },
        methods: {
            async getJewelry() {
                try {
                    let response = await fetch(this.catalogApi);
                    this.catalog = await response.json();
                } catch (error) {
                    console.log(error);
                }
            },
        },
        created() {
            this.getJewelry();
        }
    }
</script>

<style lang="scss" scoped>

</style>