<template>
    <div>
        <!-- You may also like -->
        <div class="mt-4" style="padding-top: 10vh;">
            <div class="text-left">
                <p>You may also like</p>
            </div>
            <div class="random" style="display: flex; flex-direction: row; column-gap: 5vh;">
                <!-- {{ detailItem }} -->
                <div v-for="Pic in detailItem" :key="Pic" class="mx-2" style="display: flex; justify-content: center; align-items: center; background-color: #EDE8E1; border: 1px solid #C8BDAB; height: 20vh;">
                    <img :alt="Pic.name" :src="Pic.File" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'YouMayLike',
        props: {
            detailItem: {}
        }
        
    }
</script>

<style lang="scss" scoped>

</style>