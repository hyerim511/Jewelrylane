<template>
    <section v-if="display">
    <ProductDetails :detailItem="this.itemObj"/>
    </section>
    <main v-else>
        <SlideShow />
        <section class="filter">
            <article class="tags">
                <a href="#">All</a>
                <a href="#">Rings</a>
                <a href="#">Bracelets</a>
                <a href="#">Necklaces</a>
                <a href="#">Earrings</a>
            </article>
            <form class="search">
                <input type="text" name="search" id="search">
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
          <figure v-for="jewelry in catalog" :key="jewelry.id" @click="getItem(jewelry)">
            <!-- <router-link :to="`/productDetails/${jewelry.id}`"> -->
            <img :src= "jewelry.image" style="width: 300px;"/>
              <figcaption>
                <ul>
                  <li>
                    {{jewelry.category}}
                  </li>
                  <li>
                    {{jewelry.title}}
                  </li>
                  <li>
                    $ {{jewelry.price}}
                  </li>
                </ul>
              </figcaption>
              <!-- </router-link> -->
          </figure>
        </section>
        <section class="pages">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
        </section>
    </main>
</template>

<script>
// import {ref} from 'vue';
  import SlideShow from './SlideShow.vue';
  import ProductDetails from 'ProductDetails.vue';
  export default {
      name: 'MainContent',

      props:['catalog'],
      data() {
        return {
          itemObj: {},
          display: false
        }
      },
      setup(props){
        console.log(props.catalog);
        // const onClickProduct=(id)=>{
        //   console.log(id);
        //   this.$router.push(`/productDetails/${id}`)
        // }
        // return {onClickProduct}
      },
      methods: {
        getItem(item) {
          this.itemObj = item;
          this.display = true;
        }
      },
      components: {
        ProductDetails,
        SlideShow,
      }
  }
</script>