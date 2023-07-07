<template>
    <aside class="like-list">
        <h3>You may also like</h3>
        <ul>
            <li v-for="Pic in detailItem" :key="Pic">
                <figure>
                    <div class="thumb">
                    <img :alt="Pic.name" :src="Pic.File">
                    </div>
                </figure>
            </li>
        </ul>
    </aside>
</template>

<script>
    export default {
        name: 'YouMayLike',
        props: {
            detailItem: {}
        }
        
    }
</script>
