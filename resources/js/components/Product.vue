<template>
  <div>
    <div class="products mx-auto">
      <div class="product-element">
        <a href>
          <img
            class="rounded mx-auto d-block"
            src="https://m.media-amazon.com/images/I/51hLVeM-0jL._SR500,500_.jpg"
            alt
            width="300"
            height="300"
          />
        </a>
      </div>
      <div class="product-details">
        <div class="product-reviews"></div>
        <div class="product-brand">
          <a href>The Ordinary</a>
        </div>
        <div class="product-title">
          <a href>The Ordinary Glycolic Acid 7% Toning Solution 240ml</a>
        </div>
        <div class="price">
          <span>
            <span class="price-symbol">KES</span>
            5000.00
          </span>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Product"
};
</script>
<style scoped>
/* .products {
  font-family: "Poppins";
} */
.product-title,
.product-brand,
.price {
  text-align: center;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 20px;
  letter-spacing: 0.04em;
}
.product-title a,
.product-brand a {
  max-height: 66px;
  overflow: hidden;
  cursor: pointer;
}
.product-title a {
  color: #161d25;
  font-size: 14px;
  font-weight: 500;
}
.product-brand a {
  text-transform: uppercase;
    font-weight: 400;
    color: #777;
    /* color: #161d25; */
    font-size: 14px;
    font-weight: 600;
    font-style: italic;
    letter-spacing: 0.56px;
    margin: 1rem 0;
}
.price {
  font-weight: 600;
  color: #000;
  margin: 12px 0;
  letter-spacing: 0.8px;
  margin-bottom: 7px;
  font-size: 15px;
}
</style>