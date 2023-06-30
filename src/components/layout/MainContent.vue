<template>
    <section v-if="display">
      <ProductDetails :detailItem="this.newEmitItem"/>
    </section>
    <main v-else>
        <SlideShow />
        <section class="filter">
            <ul>
                <li class="active"><a href="#">All</a></li>
                <li><a href="#" @click="getValue($event)">rings</a></li>
                <li><a href="#" @click="getValue($event)">earrings</a></li>
                <li><a href="#" @click="getValue($event)">necklaces</a></li>
                <li><a href="#" @click="getValue($event)">earrings</a></li>
                <li><a href="#">Necklaces</a></li>
                <li><a href="#">Earrings</a></li>
            </ul>
          <SearchContent @newJewelryList="search" :jewelryList="this.catalog"/>
        </section>
        <CatalogContent :catalog="this.catalog" v-if="!this.checkSearchResults()" @emitList="newItem"/>
        <CatalogContent :catalog="this.localResult" v-else @emitList="newItem" />
        
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
      props: {
        catalog: []
      },
      data() {
        return {
          jewelryList: [],
          newEmitItem: {},
          display: false,
          localResult: [],
          filterName: '',
          filteredList: [],
        }
      },
      methods: {
        newItem(e) {
          this.newEmitItem = e;
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

        getValue(e) {
          this.filteredList = [];
          this.filterName = e.target.textContent;
          this.catalog.forEach( (product)=>{ 
            if(product.category === this.filterName) {
              this.filteredList.push(product);
            }
            })
        },
      },
      components: {
        ProductDetails,
        SlideShow,
        CatalogContent,
        SearchContent,
      }
  }
</script>