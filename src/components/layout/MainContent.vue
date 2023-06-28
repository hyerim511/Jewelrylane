<template>
    <section v-if="display">
    <ProductDetails :detailItem="this.itemObj"/>
    </section>
    <main v-else>
        <SlideShow />
        <section class="filter">
            <ul>
                <li class="active"><a href="#">All</a></li>
                <li><a href="#">Rings</a></li>
                <li><a href="#">Bracelets</a></li>
                <li><a href="#">Necklaces</a></li>
                <li><a href="#">Earrings</a></li>
            </ul>
            <article>
                <form>
                  <input type="search" name="search" id="search">
                  <button type="submit">
                      <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </form>
                <a href="#">
                    Price
                    <i class="fa-solid fa-arrow-down-short-wide"></i>
                </a>
            </article>
        </section>
        <section class="content" v-if="! more">
          <figure v-for="jewelry in defalutList()" :key="jewelry.id" @click="getItem(jewelry)">
            <div class="thumb">
              <img :src= "jewelry.image">
            </div>
              <figcaption>
                <span class="label">{{jewelry.category}}</span>
                <h4>{{jewelry.title}}</h4>
                <p>$ {{jewelry.price}}</p>
              </figcaption>
          </figure>
        </section>
        <section class="content" v-else>
          <figure v-for="jewelry in catalogList2" :key="jewelry.id" @click="getItem(jewelry)">
            <div class="thumb">
              <img :src= "jewelry.image">
            </div>
              <figcaption>
                <span class="label">{{jewelry.category}}</span>
                <h4>{{jewelry.title}}</h4>
                <p>$ {{jewelry.price}}</p>
              </figcaption>
          </figure>
        </section>
        <!-- <section class="pages">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
        </section> -->
        <section class="pages">
          <button @click="viewMore">View More</button>
        </section>
    </main>
</template>

<script>
// import {ref} from 'vue';
  import SlideShow from './SlideShow.vue';
  import ProductDetails from './ProductDetails.vue';
  export default {
      name: 'MainContent',

      props: {
        catalog: []
      },
      data() {
        return {
          itemObj: {},
          display: false,
          catalogList: [],
          catalogList2: [],
          itemNumber: "",
          more: false
        }
      },
      setup(){
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
        },
        defalutList() {
          this.itemNumber = 8;
          this.catalogList = this.catalog.slice(0, this.itemNumber);
          return this.catalogList;
        },
        viewMore() {
          this.more = true;
          this.itemNumber += 4;
          this.catalogList2 = this.catalog.slice(0, this.itemNumber);
          return this.catalogList2; 
        }
      },
      components: {
        ProductDetails,
        SlideShow,
      }
  }
</script>