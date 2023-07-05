<template>
  <nav class="header">
    <ul>
      <li>
        <router-link to="/">Home</router-link>
      </li>
      <li>
        <router-link to="/about">About</router-link>
      </li>
      <li>
        <router-link to="/contact">Contact Us</router-link>
      </li>
    </ul>
    <router-link to="/"><h1>JEWELRYLANE</h1></router-link>    
    <ul>
      <li>
        <router-link to="/booking">
          <i class="fa-solid fa-calendar"></i>
        </router-link>
      </li>
      <li>
        <router-link to="/cart">
          <i class="fa-solid fa-cart-shopping"></i>
        </router-link>
      </li>
    </ul>
      <a @click="mobileNav">
        <i class="fa-solid fa-bars"></i>
      </a>
  </nav>

  <!-- MOBILE -->
  <div class="" :class="{ dim: mobileNavValue }"></div>
  <nav class="header-mobile " :class="{ display: mobileNavValue }">
    <router-link to="/"><h1>JEWELRYLANE</h1></router-link> 
    <ul>
      <li>
        <router-link to="/">Home</router-link>
      </li>
      <li>
        <router-link to="/about">About</router-link>
      </li>
      <li>
        <router-link to="/contact">Contact Us</router-link>
      </li>
    </ul>
    <ul>
      <li>
        <router-link to="/booking">
          <i class="fa-solid fa-calendar"></i>
          Booking
        </router-link>
      </li>
      <li>
        <router-link to="/cart">
          <i class="fa-solid fa-cart-shopping"></i>
          Cart
        </router-link>
      </li>
    </ul>
    <div class="btn-close" @click="mobileNavClose">
      <i class="fa-solid fa-xmark"></i>
    </div>
  </nav>
</template>
<script>

export default {
  name: 'TopContent',
  data() {
    return {
      mobileNavValue: false,
    }
  },
  methods: {
    mobileNav(){
      this.mobileNavValue = !this.mobileNavValue;
    },
    mobileNavClose(){
      this.mobileNavValue = false;
    }
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

