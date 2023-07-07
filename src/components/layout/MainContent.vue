<template>
    <section v-if="display">
      <ProductDetails :detailItem="this.newEmitItem"/>
    </section>
    <main v-else>
        <SlideShow />
        <section class="filter">
            <ul>
                <li class="active"><a href="#" @click="getValue($event)">All</a></li>
                <li><a href="#" @click="getValue($event)">rings</a></li>
                <li><a href="#" @click="getValue($event)">earrings</a></li>
                <li><a href="#" @click="getValue($event)">necklaces</a></li>
                <li><a href="#" @click="getValue($event)">bracelets</a></li>
            </ul>
          <SearchContent @newJewelryList="search" @sortedJewelry="sort" :jewelryList="this.catalog"/>
        </section>
        <a class="btn-filter" @click="mobileFilter">
          <i class="fa-solid fa-ellipsis"></i>
        </a>
        <section class="filter-mobile " :class="{ display: mobileFilterValue }">
            <ul>
                <li class="active"><a href="#" @click="getValue($event)">All</a></li>
                <li><a href="#" @click="getValue($event)">rings</a></li>
                <li><a href="#" @click="getValue($event)">earrings</a></li>
                <li><a href="#" @click="getValue($event)">necklaces</a></li>
                <li><a href="#" @click="getValue($event)">bracelets</a></li>
            </ul>
          <SearchContent @newJewelryList="search" @sortedJewelry="sort" :jewelryList="this.catalog"/>
        </section>
        <div v-if="this.filteredList.length">
        <CatalogContent :catalog="this.filteredList" @emitList="newItem"/>
        </div>
        <div v-if="this.searchResult.length">
        <CatalogContent :catalog="this.searchResult" @emitList="newItem"/>
        </div>
        <div v-if="this.sortingResult.length">
        <CatalogContent :catalog="this.sortingResult" @emitList="newItem"/>
        </div>
        <div v-if="!this.filteredList.length && !this.searchResult.length && !this.sortingResult.length">
        <CatalogContent :catalog="this.catalog" @emitList="newItem"/>
        </div>
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
          searchResult: [],
          sortingResult: [],
          filterName: '',
          filteredList: [],
          mobileFilterValue: false,
        }
      },
      methods: {
        newItem(e) {
          this.newEmitItem = e;
          this.display = true;
        },
        search(e) {
          this.searchResult = e;
        },
        checkSearchResults() {
          if (this.searchResult.length > 0) {
            return true;
          } else {
            return false;
          }
        },
        sort(e) {
          this.sortingResult = e;
        },
        getValue(e) {
          this.filteredList = [];
          this.filterName = e.target.textContent;
          this.catalog.forEach( (product)=>{ 
            if(product.category === this.filterName) {
              this.filteredList.push(product);
            } if(this.filterName == 'All') {
              this.filteredList = this.catalog;
            }
          })
        },
        mobileFilter(){
          this.mobileFilterValue = !this.mobileFilterValue;
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


<style scoped>

  .display {
    display: flex;
    animation-name: navAni;
    animation-duration: .8s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
  }

  @keyframes navAni {
    from { opacity: 0; top: -5%;}
    to { opacity: 1; top: 0;}
  }

</style>