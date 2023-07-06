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
                    <p> $ {{ detailItem.price }}</p>
                </div>
                <form v-on:submit.prevent="addToCart(detailItem.title)">
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
                    <button type="submit">
                        Add to cart
                    </button>

                    <!-- <router-link to="/cart">
                        <button type="submit" @click="addToCart(product)">
                            Add to cart
                        </button>

                    </router-link> -->
                </form>
            </figcaption>
        </figure>
        <YouMayLike :detailItem="Pic"/>
    </section>
</template>

<script>
    import {ref} from 'vue';
    import YouMayLike from './YouMayLike.vue';
    export default {
    components: { YouMayLike },
        name: 'ProductDetails',
        products: [],
        product: [],
        cart: [],
        data(){
            return {
                // carts: [],
                Pic: [
                    {name: 'R1', File: 'https://int.cartier.com/content/dam/rcq/car/10/58/52/1/1058521.png'},
                    {name: 'R2', File: 'https://int.cartier.com/content/dam/rcq/car/13/61/33/2/1361332.png'},
                    {name: 'R3', File: 'https://int.cartier.com/content/dam/rcq/car/17/93/96/8/1793968.png'},
                    {name: 'R4', File: 'https://int.cartier.com/content/dam/rcq/car/90/23/92/902392.png'},

                ],

            }
        },
        setup(){
            // for button+,-
            const qty = ref(0)
            return {
                qty
            }
        },
        props: {
            detailItem: {}

        },
        methods: {
            addToCart(product){
                // this.$store.dispatch('addProductToCart', {
                //     product: this.product,
                //     quantity: 1
                // })
                // this.carts.push(product);
                console.log(product);
            }
        }
        
    }
        
</script>