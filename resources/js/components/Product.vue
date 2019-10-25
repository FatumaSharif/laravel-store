<template>
  <div>
    <div class="products">
      <div class="product-element">
        <router-link to="/shop">
          <img
            class="product-image"
            src="https://m.media-amazon.com/images/I/51MYxkOabGL._SR500,500_.jpg"
            alt
            width="200"
            height="200"
          />
        </router-link>
      </div>
      <div class="product-details">
        <div class="product-reviews"></div>
        <div class="product-brand">
          <a href>The Ordinary</a>
        </div>
        <div class="product-title">
          <router-link to="/shop">The Ordinary Glycolic Acid 7% Toning Solution 240ml</router-link>
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
.product-title,
.product-brand,
.price {
  text-align: center;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 20px;
  letter-spacing: 0.04em;
  width: 75%;
  margin-left: 12.5%;
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
  letter-spacing: 0.8px;
  margin-top: 10px;
  margin-bottom: 7px;
  font-size: 13px;
}
.product-element {
  position: relative;
  overflow: hidden;
  margin-bottom: 10px;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
}
img.mx-auto.d-block {
    max-width: 100%;
    max-height: 100%;
}
</style>