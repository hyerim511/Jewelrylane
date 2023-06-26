<template>
  <nav class="header-tab">
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
    </ul>
  </nav>
</template>
<script>

export default {
  name: 'TopContent'
}

</script>




