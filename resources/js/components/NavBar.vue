<template>
  <div class="navbar-sections">
    <div class="pre-nav level-right">
      <span class="nav-phone">+254 722 147 031</span>
      <span class="navbar-bar">|</span>
      <span class="nav-sell">CONTACT US</span>
    </div>
    <div>
      <b-navbar toggleable="lg">
        <b-navbar-brand href="#">NavBar</b-navbar-brand>

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav>
            <b-nav-item href="#">Link</b-nav-item>
            <b-nav-item href="#" disabled>Disabled</b-nav-item>
          </b-navbar-nav>

          <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto">
            <b-nav-form>
              <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
              <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
            </b-nav-form>

            <b-nav-item-dropdown text="Lang" right>
              <b-dropdown-item href="#">EN</b-dropdown-item>
              <b-dropdown-item href="#">ES</b-dropdown-item>
              <b-dropdown-item href="#">RU</b-dropdown-item>
              <b-dropdown-item href="#">FA</b-dropdown-item>
            </b-nav-item-dropdown>

            <b-nav-item-dropdown right>
              <!-- Using 'button-content' slot -->
              <template v-slot:button-content>
                <em>User</em>
              </template>
              <b-dropdown-item href="#">Profile</b-dropdown-item>
              <b-dropdown-item href="#">Sign Out</b-dropdown-item>
            </b-nav-item-dropdown>
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
  }
};
</script>

<style scoped>
.logo-name {
  font-weight: 600;
  color: #000;
  font-size: 150%;
}

.navbar-item {
  text-transform: uppercase;
  font-size: 110%;
}

.pre-nav {
  background-color: #fafafa;
  padding: 0% 8% 0 0;
}

.pre-nav span {
  font-weight: 600;
  font-size: 120%;
  margin-top: 1%;
  margin-bottom: 1%;
}

.navbar-section {
  margin: 1.5% 7% 1% 7%;
}

.navbar-bar {
  padding-left: 2%;
  padding-right: 2%;
}
</style>