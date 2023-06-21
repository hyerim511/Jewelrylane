<template>
  <div>
    <TopContent />
    <router-view></router-view>
    <FootContent />
    <product-details />
  </div>
</template>

<script>
import TopContent from './components/layout/topContent.vue';
import ProductDetails from './components/pages/productDetails.vue'
import FootContent from './components/layout/footContent.vue';

export default {
  name: 'App',
  components: {
    ProductDetails,
    TopContent,
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
