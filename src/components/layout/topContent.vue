<template>
    <section class="header-tab">
      <nav>
        <aside>
          <ul>
            <li>
              <router-link class="nav-link" to="/">Home</router-link>
            </li>
            <li>
              <router-link class="nav-link" to="/about">About</router-link>
            </li>
            <li>
              <router-link class="nav-link" to="/contact">Contact Us</router-link>
            </li>
          </ul>
        </aside>
        <aside>
          <h1>
            JEWELRYLANE
          </h1>
        </aside>
        <aside>
          <ul>
            <li>
              <router-link class="nav-icon" to="/booking">
                <i class="fa-solid fa-calendar"></i>
              </router-link>

            </li>
            <li>
              <router-link class="nav-icon" to="/cart">
                <i class="fa-solid fa-cart-shopping"></i>
              </router-link>
            </li>
          </ul>
        </aside>
      </nav>
    </section>
</template>
<script>

export default {
  name: 'topContent'
}


</script>


