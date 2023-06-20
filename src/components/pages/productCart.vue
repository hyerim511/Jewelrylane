<template>
    <div>
        <section>
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
        </section>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>