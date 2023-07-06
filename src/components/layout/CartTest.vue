<template>
    <figure class="testCart">
        <img :src="cartItem.image" alt="">
        <figcaption>
            <p>{{ cartItem.title }}</p>
        </figcaption>
    </figure>
</template>

<script>
export default {
    name: 'CartTest',
    props: {
        cartItem: {}
    }
}
</script>

<style scoped>

.testCart {
    background-color: white;
    width: 100vw;
    height: 100vh;
    position: absolute;
    top: 0;
    left:0;
}


</style>