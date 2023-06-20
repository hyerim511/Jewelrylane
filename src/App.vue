<template>
  <div>
    <TopContent />
    <slideShow />
    <router-view></router-view>
    <FootContent />
    <aboutPage />
  </div>
</template>

<script>
//Import HeaderandNav
import TopContent from './components/layout/topContent.vue';
import FootContent from './components/layout/footContent.vue';
import SlideShow from './components/layout/slideShow.vue';
import AboutPage from './components/pages/aboutPage.vue';


export default {
  name: 'App',
  components: {
    // HelloWorld,
    TopContent,
    FootContent,
    SlideShow,
    AboutPage,
    
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
