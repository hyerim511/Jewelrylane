<template>
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
          <figure v-for="jewelry in catalogListMore" :key="jewelry.id" @click="getItem(jewelry)">
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
    <section class="pages">
          <button @click="viewMore">View More</button>
    </section>
</template>

<script>

export default {
   name: "CatalogContent",
   props: {
    catalog: []
   },
   data() {
        return {
          catalogList: [],
          catalogListMore: [],
          itemNumber: "",
          more: false
        }
    },
    methods: {
        defalutList() {
          this.itemNumber = 8;
          this.catalogList = this.catalog.slice(0, this.itemNumber);
          return this.catalogList;
        },
        viewMore() {
          this.more = true;
          this.itemNumber += 4;
          this.catalogListMore = this.catalog.slice(0, this.itemNumber);
          return this.catalogListMore; 
        }
    }
}
</script>