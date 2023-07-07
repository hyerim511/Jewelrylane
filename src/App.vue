<template>
  <div>
    <TopContent />
    <router-view/>
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

@import './assets/css/style.css';

#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
