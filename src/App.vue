<template>
  <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
  <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
  <main>
    <section class="filter">
      <article class="tags">
        <a href="#">All</a>
        <a href="#">Rings</a>
        <a href="#">Bracelets</a>
        <a href="#">Necklaces</a>
        <a href="#">Earrings</a>
      </article>
      <form class="search">
        <input type="text" name="search" id="search" />
        <button type="submit" class="btn btn-primary">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
      <article class="price">
        <a href="#">
          Price
          <i class="fa-solid fa-arrow-down-short-wide"></i>
        </a>
      </article>
    </section>
    <section class="content">
      <a href="#">
        <figure v-for="jewelry in catalog" :key="jewelry.id">
          <img alt="Vue logo" src="./assets/img/ring.jpeg">
          <!-- {{ jewelry.image }} -->
          <figcaption>
            <ul>
              <li>
                {{ jewelry.category }}
              </li>
              <li>
                {{ jewelry.title }}
              </li>
              <li>$ {{ jewelry.price }}</li>
            </ul>
          </figcaption>
        </figure>
      </a>
    </section>
    <section class="pages">
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
    </section>
  </main>
  <!-- <MainContent/> -->
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
// import MainContent from './components/MainContent.vue'

export default {
  name: "App",
  // components: {
  //   // HelloWorld
  //   MainContent
  // },
  data() {
    return {
      catalog: [],
      catalogApi:
        "http://localhost/jewelrylane/final-jewelrylane/api/jewelryApi/jewelry.php",
    };
  },
  methods: {
    async getJewelry() {
      try {
        let response = await fetch(this.catalogApi);
        this.catalog = await response.json();
      } catch (error) {
        console.log(error);
      }
    },
  },
  created() {
    this.getJewelry();
  },
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
