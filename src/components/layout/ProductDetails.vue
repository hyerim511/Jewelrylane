<template>
    <section class="product-detail">
        <figure>
            <div class="thumb">
                <img :alt="detailItem.title" :src="detailItem.image" />
            </div>
            <figcaption>
                <div>
                    <span class="label">{{ detailItem.category }}</span>
                    <h2>{{ detailItem.title }}</h2>
                    <p>{{ detailItem.price }}</p>
                </div>
                <form>
                    <label for="qty">Quantity</label>
                    <div class="quantity">
                        <a class="btn-minus" @click="qty--">
                            <i class="fa-solid fa-minus"></i>
                        </a>
                        <input type="number" class="input-qty w-full text-center" id="qty" v-model="qty">
                        <a class="btn-plus" @click="qty++">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <button type="submit">Add to cart</button>
                </form>
            </figcaption>
        </figure>
            
            <!-- You may also like -->
            <div class="mt-4">
                <div class="text-left">
                    <p>You may also like</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div v-for="n in 4" :key="n" class="mx-2">
                        <!-- <img :alt="jewelry.title" :src="jewelry.image"> -->
                        <img style="width: 300px;" src="https://img.etimg.com/photo/msid-97025114/jewels-galaxy-love-adjustable-ring.jpg">
                    </div>
                </div>
            </div>
        </section>
</template>

<script>
    import {ref} from 'vue';
    export default {
        name: 'ProductDetails',
        setup(){
            // for button+,-
            const qty = ref(0)
            return {
                qty
            }
        },
        props: {
            detailItem: {}
        }
    }
</script>