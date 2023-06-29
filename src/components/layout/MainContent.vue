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
          <SearchContent @newJewelryList="search" :jewelryList="this.catalog"/>
        </section>
        <CatalogContent :catalog="this.catalog" v-if="!this.checkSearchResults()"/>
        <CatalogContent :catalog="this.localResult" v-else/>
        
    </main>
</template>

<script>
// import {ref} from 'vue';
  import SlideShow from './SlideShow.vue';
  import ProductDetails from './ProductDetails.vue';
  import CatalogContent from './CatalogContent.vue';
  import SearchContent from './SearchContent.vue';
  export default {
      name: 'MainContent',

      // props:['catalog'],
      props: {
        catalog: []
      },
      data() {
        return {
          jewelryList: [],
          itemObj: {},
          display: false,
          localResult: []
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

        search(e) {
          this.localResult = e;
        },

        checkSearchResults() {
          if (this.localResult.length > 0) {
            return true;
          } else {
            return false;
          }
        },
      },
      components: {
        ProductDetails,
        SlideShow,
        CatalogContent,
        SearchContent
      }
  }
</script>