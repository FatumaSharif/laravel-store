<template>
  <div>
    <NavBar />
    <div class="container">
      <h2 class="shop-title">Shop</h2>
      <b-breadcrumb :items="items"></b-breadcrumb>
      <div class="row products">
        <div class="col-2 catalog">
          <h4 class="catalog-title">Categories</h4>
          <p>Cleansers</p>
          <p>Toners</p>
          <p>Exfoliants</p>
          <p>Moisturizer</p>
          <p>Serum</p>
          <p>Masks</p>

          <h4 class="catalog-title catalog-title2">Skin Type</h4>
          <p>Dry</p>
          <p>Oily</p>
          <p>Pores</p>
          <p>Ezcema</p>
        </div>
        <div class="col-10">
          <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3" v-for="product in products" :key="product.id">
              <div class="products">
                <div class="product-element">
                  <router-link
                    router-link
                    :to="{ path: '/shop/'+product.slug }"
                  >
                    <img
                      class="mx-auto d-block"
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
                    <a href>{{ product.brand }}</a>
                  </div>
                  <div class="product-title">
                    <router-link to="/shop">{{ product.name }}</router-link>
                  </div>
                  <div class="price">
                    <span>
                      <span class="price-symbol">KES</span>
                      {{product.price}}.00
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <Footer />
  </div>
</template>

<script>
import NavBar from "../components/NavBar";
import Product from "../components/Product";
import Footer from "../components/Footer";

export default {
  components: {
    NavBar,
    Product,
    Footer
  },
  data() {
    return {
      items: [
        {
          text: "Home",
          href: "#"
        },
        {
          text: "Products",
          href: "#"
        }
      ],
      products: [],
      product: {
        id: "",
        name: "",
        brand: "",
        description: "",
        price: ""
      },
      product_id: ""
    };
  },
  mounted() {
    axios.get("api/shop").then(response => (this.products = response.data));
  }
};
</script>
<style scoped>
.shop-title {
  font-size: 1.5rem;
}
.products {
  margin-top: 4%;
}
.catalog {
  border-right: 1px solid #eee;
}
.catalog p {
  font-size: 0.8rem;
  font-weight: 500;
  margin: 8px 0;
  color: #777;
}
.catalog-title {
  text-transform: uppercase;
  font-size: 1rem;
}
.catalog-title2 {
  margin-top: 1.5rem;
}
</style>
