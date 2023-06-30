<template>
  <nav class="header">
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
    <h1>
      JEWELRYLANE
    </h1>
    <ul>
      <li>
        <router-link class="nav-icon cursor-pointer" to="/booking">
          <i class="fa-solid fa-calendar"></i>
        </router-link>
      </li>
      <li>
        <router-link class="nav-icon" to="/cart">
          <i class="fa-solid fa-cart-shopping"></i>
        </router-link>
      </li>
      <li>
        <i class="fa-solid fa-cart-shopping"></i>
      </li>
    </ul>
  </nav>

  <!-- MOBILE -->
  <div class="dim display"></div>
  <nav class="header-mobile display">
    <h1>
      JEWELRYLANE
    </h1>
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
    <ul>
      <li>
        <router-link class="nav-icon cursor-pointer" to="/booking">
          <i class="fa-solid fa-calendar"></i>
          Booking
        </router-link>
      </li>
      <li>
        <router-link class="nav-icon" to="/cart">
          <i class="fa-solid fa-cart-shopping"></i>
          Cart
        </router-link>
      </li>
    </ul>
    <div class="btn-close">
      <i class="fa-solid fa-cart-shopping"></i>
    </div>
  </nav>
</template>
<script>

export default {
  name: 'TopContent'
}

</script>

<style scoped>
  .display {
    display: none;
  }
</style>

