<template>
    <article>
        <form>
            <input type="search" name="search" id="search" @keyup="search($event)" v-model="typedValue">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
        <a href="#" @click="sort">
            Price
            <i class="fa-solid fa-arrow-down-short-wide"></i>
        </a>
    </article>
</template>

<script>
export default {
    name: "SearchContent",
    props: {
        jewelryList: [],
    },
    data() {
        return {
            typedValue: '',
            searchResult: [],
            sortedResult: [],
            localList: [],
        }
    },
    methods: {
        search() {
          this.searchResult = this.jewelryList.filter(
            (jewelry) => jewelry.category.toLowerCase().includes(this.typedValue.toLowerCase())
          );

          this.$emit("newJewelryList", this.searchResult);
        },
        sort() {
            this.localList = this.jewelryList;

            this.localList.sort(
                (jewelry1,jewelry2) => {return jewelry1.price - jewelry2.price}
            );
            // console.log(this.localList)

            this.$emit("sortedJewelry", this.localList)
        },
    }
}
</script>