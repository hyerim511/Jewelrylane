<template>
    <div>
        <section class="container">
            <div class="row">
                <div class="col-6">
                    <!-- <img :alt="jewelry.title" :src="jewelry.image" /> -->
                    <!-- <img src="https://img.etimg.com/photo/msid-97025114/jewels-galaxy-love-adjustable-ring.jpg"> -->
                </div>
                <div class="col-6">
                    <div class="catelog-tag">
                        <!-- {{ jewelry.category }} -->
                    </div>
                    <div class="text-left">
                        <h2>
                            <!-- {{ jewelry.title }} -->
                        </h2>
                    </div>
                    <div class="text-left">
                        <span>$ 99.99</span>
                        <!-- {{ jewelry.price }} -->
                    </div>
                    <div class="d-flex justify-content-left my-4">
                        <span class="pr-2">Quantity</span>
                        <div>
                            <button class="btn-minus" @click="qty--">-</button>
                        </div>
                        <div class="w-full">
                            <input type="number" class="input-qty w-full text-center" v-model="qty">
                        </div>
                        <div>
                            <button class="btn-plus" @click="qty++">+</button>
                        </div>
                    </div>
                    <div>
                        <button class="btn-add-to-cart">Add to cart</button>
                    </div>
                    <!-- <div class="text-left">
                        <span>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.
                            {{ jewelry. }}
                        </span>
                    </div> -->
                </div>
            </div>
            <div class="mt-4">
                <div class="text-left">
                    <span>You may also like</span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div v-for="n in 4" :key="n" class="mx-2">
                        <!-- <img :alt="jewelry.title" :src="jewelry.image"> -->
                        <img style="width: 300px;" src="https://img.etimg.com/photo/msid-97025114/jewels-galaxy-love-adjustable-ring.jpg">
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import {ref} from 'vue';
    export default {
        name: 'productDetails',
        // data() {
        //     return {
        //         catalog: [],
        //         catalogApi:
        //         "http://localhost/final-jewelrylane/api/jewelryApi/jewelry.php",
        //     };
        // },
        // methods: {
        //     async getJewelry() {
        //         try {
        //             let response = await fetch(this.catalogApi);
        //             this.catalog = await response.json();
        //         } catch (error) {
        //             console.log(error);
        //         }
        //     },
        // },
        // created() {
        //     this.getJewelry();
        // },
        setup(){
            // for button+,-
            const qty = ref(0)
            return {
                qty
            }
        }

    }
</script>

<style scoped>
.text-left {
    text-align: left;
}
.pr-2 {
    padding-right: 5px;
}
.w-full {
    width: 100%;
}
.catelog-tag {
    background-color: grey;
    color: white;
    /* padding: 1px; */
    font-size: 12px;
    width: 50px;
    border-radius: 5px;
}
.btn-minus {
    border: 1px solid grey;
    border-right: none;
    background-color: white;
}
.btn-plus {
    border: 1px solid grey;
    border-left: none;
    background-color: white;
}
.input-qty {
    border: 1px solid lightgray;
    border-left: none;
    border-right: none;
}
.btn-add-to-cart {
    width: 100%;
    padding: 10px;
    border-radius: 25px;
    background-color: lightgrey;
    border: none;
    color: white;
}
</style>