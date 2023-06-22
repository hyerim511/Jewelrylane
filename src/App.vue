<template>
  <div>
    <TopContent />
    <router-view></router-view>
    <product-details />
    <FootContent />
  </div>
</template>

<script>
import TopContent from './components/layout/topContent.vue';
import ProductDetails from './components/pages/productDetails.vue'
import FootContent from './components/layout/footContent.vue';

export default {
  name: 'App',
  components: {
    TopContent,
    ProductDetails,
    FootContent
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
