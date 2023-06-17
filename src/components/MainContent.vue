<template>
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
            <a href="#">
          <figure v-for="jewelry in catalog" :key="jewelry.id">
                      {{jewelry.image}}
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
            </figure>
          </a>
            <!-- <figure v-for="jewelry in catalog" :key="jewelry.id">
                {{jewelry.id}}
                {{jewelry.category}}
                {{jewelry.title}}
                {{jewelry.price}}
                {{jewelry.material}}
                {{jewelry.image}}
            </figure> -->
        </section>
        <section class="pages">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
        </section>
    </main>
</template>

<script>
    export default {
        name: 'MainContent'
    }
</script>