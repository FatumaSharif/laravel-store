<template>
  <div class="container">
    <h1>Products Page</h1>
    <div class="row">
      <div class="col">
        <Product />
      </div>
      <div class="col">
        <Product />
      </div>
      <div class="col">
        <Product />
      </div>
      <div class="col">
        <Product />
      </div>
    </div>
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
<style scoped></style>