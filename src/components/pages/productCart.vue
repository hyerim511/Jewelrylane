<template>
    <div>
        <div class="header">
            <h2>Your Cart</h2>
            <div>
                <button @click="showCart = !showCart" v-show="!verified">
                    {{ items.length + (items.length > 1 || items.length === 0 ? " items" : " item") }}
                </button>
            </div>
        </div>
        
        <!-- <section>
            <article>
                <figure>
                    <img src="" alt="">
                    <figcaption>
                        <section>
                            <h5>
                                {{ jewelry.category }}
                            </h5>
                            <h3>
                                {{ jewelry.name }}
                            </h3>
                        </section>
                        <section>
                            <aside>
                                <div>
                                    <h4>
                                        Quantity
                                    </h4>
                                    
                                </div>
                            </aside>
                            <aside>
                                {{ jewelry.price }}
                            </aside>
                        </section>
                    </figcaption>
                </figure>
            </article>
            <article>

            </article>
        </section>
        <section>
            <article>
                <aside>
                    <label for="subtotal">subtotal</label>
                    <div>
                        {{ sub.price }}
                    </div>
                </aside>
                <aside>
                    <button type="submit">Check out</button>
                </aside>
            </article>
        </section> -->
        <div class="cart" v-show="showCart">
            <div v-show="items.length > 0">
                <ul>
                    <li v-for="item in items" :key="item" transition="fade">
                        <p><strong>{{ item.quantity }}</strong> - {{ item.name }} <i class="fa fa-trash" @click="removeFromCart(item)"></i></p>
                    </li>
                </ul>
                <div>
                    <button @click="verified = true, showCart = false">Check out</button>
                </div>
            </div>
            <div v-show="items.length === 0">
                <p>Your cart is empty!</p>
            </div>
        </div>
        <div class="container">
            <div class="shop" v-show="!verified">
                <h3>In Cart</h3>
                <ul>
                    <li v-for="item in shop" :key="item">
                        <div>
                            <h5>{{ item.name }}</h5>
                            <p>${{ item.price }}</p>
                            <button @click="addToCart(item)">Add to cart</button>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="checkout" v-show="verified">
                <h3>Your Cart</h3>
                <h5 v-for="item in items" :key="item"><strong>{{ item.quantity }}</strong> - {{ item.name }}<span>${{ item.price * item.quantity }}</span></h5>
                <hr />
                <div class="row">
                    <div class="u-pull-right">
                        <!-- <h5>Total: <span>{{ total | currency }}</span></h5> -->
                        <button>Looks Good</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'ProductCart',
        data(){
            return {
                items: [],
                // shop: shop,
                showCart: false,
                verified: false,
                quantity: 1

            }
        },
        setup(){
            const shop = [
                {
                    name: "One-Punch Man, Vol. 5",
                    price: 10.02,
                    quantity: 0
                },
                {
                    name: "Gantz Omnibus, Vol. 1",
                    price: 22.98,
                    quantity: 0
                },
                {
                    name: "Dragon Ball Freeza Arc, Vol. 1",
                    price: 15.98,
                    quantity: 0
                },
                {
                    name: "Uzumaki: Spiral into Horror, Vol. 1",
                    price: 4.84,
                    quantity: 0
                },
                {
                    name: "Superman: Red Son (New Edition)",
                    price: 10.93,
                    quantity: 0
                }
            ]
            return {
                shop
            }
        },
        computed: {
            total() {
            var total = 0;
            for(
                var i = 0; i < this.items.length; i++) 
                {
                total += this.items[i].price;
                }
            return total;
            }
        },
        methods: {
            addToCart(item) {
            item.quantity += 1;
            this.items.push(item);
            },
            removeFromCart(item) {
            item.quantity -= 1;
            this.items.splice(this.items.indexOf(item), 1);
            }
        }
        
    }
</script>

<style lang="scss" scoped>

</style>