<template>
  <section class="header-tab">
    <!-- <nav>
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
    </nav> -->
    <div class="row">
      <div class="col-4">
        <div class="d-flex align-items-center justify-content-left">
          <div class="w-10">
            <router-link class="nav-link" to="/">Home</router-link>
          </div>
          <div class="w-10">
            <router-link class="nav-link" to="/about">About</router-link>
          </div>
          <div class="w-10">
            <router-link class="nav-link" to="/contact">Contact Us</router-link>
          </div>
        </div>
      </div>
      <div class="col-4">
        <h1>
          JEWELRYLANE
        </h1>
      </div>
      <div class="col-4">
        <div class="d-flex align-items-center justify-content-end">
          <div class="w-10">
            <router-link class="nav-icon cursor-pointer" to="/booking">
              <i class="fa-solid fa-calendar"></i>
            </router-link>
          </div>
          <div class="w-10">
            <router-link class="nav-icon" to="/cart">
              <i class="fa-solid fa-cart-shopping"></i>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>

export default {
  name: 'topContent'
}

</script>

<style scoped>
  .header-tab {
    box-shadow: -5px 0px 10px 0px rgba(0, 0, 0, 0.15);
    position: fixed;
    width: 100%;
    top: 0;
    padding: 1%;
  }
  .nav-link {
    font-weight: 700;
  }
  .w-10 {
    width: 20%;
  }
  
</style>


