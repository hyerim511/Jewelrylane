<template>
  <div>
    <TopContent />
    <router-view></router-view>
    <FootContent />
  </div>
</template>

<script>
import TopContent from './components/layout/topContent.vue';
import FootContent from './components/layout/footContent.vue';

export default {
  name: "App",
  components: {
    TopContent,
    FootContent
  },
  // data() {
  //   return {
  //     catalog: [],
  //     catalogApi:
  //       "http://localhost/final-jewelrylane/api/jewelryApi/jewelry.php",
  //   };
  // },
  // methods: {
  //   async getJewelry() {
  //     try {
  //       let response = await fetch(this.catalogApi);
  //       this.catalog = await response.json();
  //     } catch (error) {
  //       console.log(error);
  //     }
  //   },
  // },
  // created() {
  //   this.getJewelry();
  // }
};
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
