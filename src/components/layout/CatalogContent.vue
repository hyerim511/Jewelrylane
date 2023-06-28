<template>
    <section class="content">
        <figure v-for="jewelry in catalog" :key="jewelry.id" @click="getItem(jewelry)">
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
</template>

<script>

export default {
   name: "CatalogContent",
   props: {
    catalog: []
   }
}
</script>