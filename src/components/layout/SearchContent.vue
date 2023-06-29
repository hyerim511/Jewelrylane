<template>
    <article>
        <form>
            <input type="search" name="search" id="search" @keyup="search($event)" v-model="typedValue">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
        <a href="#">
            Price
            <i class="fa-solid fa-arrow-down-short-wide"></i>
        </a>
    </article>
</template>

<script>
export default {
    name: "SearchContent",
    props: {
        jewelryList: []
    },
    data() {
        return {
            typedValue: '',
            searchResult: [],
        }
    },
    methods: {
        search() {
          this.searchResult = this.jewelryList.filter(
            (jewelry) => jewelry.category.toLowerCase().includes(this.typedValue.toLowerCase())
          );

          this.$emit("newJewelryList", this.searchResult);
        },
    }
}
</script>