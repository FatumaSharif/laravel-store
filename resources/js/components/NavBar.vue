<template>
  <div class="navbar-sections">
    <div class="pre-nav level-right text-right">
      <span class="nav-phone">Need Help? Call / Whatsapp / SMS - 0712 345 678</span>
      <!-- <span class="navbar-bar">|</span>
      <span class="nav-sell">CONTACT US</span>-->
    </div>
    <div>
      <div class="navbrand">
        <b-navbar-brand href="#">
          <router-link to="/">LaRosa Beauty</router-link>
        </b-navbar-brand>
      </div>
      <b-navbar toggleable="lg" sticky>
        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>
          <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto">
            <b-nav-item-dropdown class="nav-item-dropdwon" text="Skincare" right>
              <b-dropdown-item href="#">Cleansers</b-dropdown-item>
              <b-dropdown-item href="#">Exfoliants</b-dropdown-item>
              <b-dropdown-item href="#">Masks</b-dropdown-item>
              <b-dropdown-item href="#">Serum</b-dropdown-item>
              <b-dropdown-item href="#">Moisturizers</b-dropdown-item>
              <b-dropdown-item href="#">Sunscreen</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown text="Concerns" right>
              <b-dropdown-item href="#">Acne</b-dropdown-item>
              <b-dropdown-item href="#">Blackspots</b-dropdown-item>
              <b-dropdown-item href="#">Sunburn</b-dropdown-item>
              <b-dropdown-item href="#">Wrinkles</b-dropdown-item>
              <b-dropdown-item href="#">Dark Eye Circles</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown text="Brands" right>
              <b-dropdown-item href="#">Aveeno</b-dropdown-item>
              <b-dropdown-item href="#">Eucerin</b-dropdown-item>
              <b-dropdown-item href="#">Neutrogena</b-dropdown-item>
              <b-dropdown-item href="#">The Ordinary</b-dropdown-item>
              <b-dropdown-item href="#">Loreal</b-dropdown-item>
              <b-dropdown-item href="#">The Body Shop</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item href="#">Essentials</b-nav-item>
            <b-nav-item href="#">Log In / Register</b-nav-item>
          </b-navbar-nav>
        </b-collapse>
      </b-navbar>
    </div>
  </div>
</template>

<script>
export default {
  name: "NavBar",
  data() {
    return {
      showNav: false
    };
  },
  props: {
    sticky: true
  }
};
</script>

<style >
.navbar {
  padding: 1.2rem;
}
.navbar-nav {
  margin: auto;
}
.navbrand {
  text-align: center;
}
a.navbar-brand {
  /* color: #2d2d2d; */
  font-size: 22px;
}
.navbar-light .navbar-nav .nav-link {
  /* color: #2d2d2d; */
  text-transform: uppercase;
  font-weight: 500;
}
.nav-link {
  /* color: #2d2d2d; */
  text-transform: uppercase;
}
.pre-nav.level-right {
  background-color: #fafafa;
  padding: 10px 10px 10px 0;
  font-size: 0.9rem;
  font-weight: 500;
  margin-bottom: 2%;
}
.navbar-light .navbar-nav .nav-link,
li#__BVID__35,
li#__BVID__23,
li#__BVID__9 {
  text-transform: uppercase;
  color: #2d2d2d !important;
  font-weight: 500;
  font-size: 16px;
}
</style>