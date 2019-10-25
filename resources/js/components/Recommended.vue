<template>
  <div>
    <div class="container-fluid recommended">
      <hr>
      <h2 class="title">You may also like</h2>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <Product />
        </div>
        <div class="col-sm-6 col-md-3">
          <Product />
        </div>
        <div class="col-sm-6 col-md-3">
          <Product />
        </div>
        <div class="col-sm-6 col-md-3">
          <Product />
        </div>
      </div>
    </div>
    <Footer />
  </div>
</template>

<script>
import Product from "./Product";

export default {
  components: {
    Product
  }
};
</script>
<style scoped>
.recommended {
  margin: 5% 0;
}
.recommended-title {
  text-align: center;
  margin-bottom: 2%;
  text-transform: uppercase;
}
</style>
