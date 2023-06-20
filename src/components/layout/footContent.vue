<template>
    <footer>
        <section>
            <p>
                Copyright&copy; 2023 <span>JewelryLane</span>
            </p>
        </section>
        <section>
            <aside>
                <a href="#" class="fa-brands fa-facebook-f"></a>
                <a href="#" class="fa-brands fa-instagram"></a>
                <a href="#" class="fa-brands fa-twitter"></a>         
            </aside>
        </section>
    </footer>
</template>

<script>
export default {
    name: 'footContent'
}
</script>

<style scoped>
    @import '../../assets/css/main.css';
    footer {
        box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.15);
        position: relative;
        width: 100%;
        bottom: 0;
        padding: 1%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        text-align: center;
    }
    aside {
        display: flex;
        column-gap: 5vh;
    }
    
    
</style>