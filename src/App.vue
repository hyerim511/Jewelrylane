<template>
  <div>
    <TopContent />
    <router-view></router-view>
    <FootContent />
  </div>
</template>

<script>
import TopContent from './components/layout/TopContent.vue';
import FootContent from './components/layout/FootContent.vue';

export default {
  name: "App",
  components: {
    TopContent,
    FootContent
  },
};
</script>

<style>

@import 'assets/css/style.css';
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
