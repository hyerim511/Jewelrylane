<template>
    <section class="cart">
        <aside>
            <h3>CART</h3>
        </aside>
        <form>
            <figure>
                <img :src="cartProduct.image" :alt="cartProduct.title">
                <figcaption>
                    <span class="label">{{ cartProduct.category }}</span>
                    <h2>{{ cartProduct.title }}</h2>  
                    <p>Quantity: {{ cartProduct.qty }}</p>               
                </figcaption>
            </figure>
            <div class="total">
                <p><span>total</span> $ {{ cartProduct.price * cartProduct.qty }}</p>
                <button type="submit">Check out</button>
            </div>
        </form>
        <button class="btn-close-cart" @click="closeCart">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </section>
   
</template>

<script>
export default {
    name: 'CartContent',
    props: {
        cartProduct: {},
    },
    methods: {
        closeCart() {
            this.$emit('closeCart',false)
        }
    }
}
</script>
