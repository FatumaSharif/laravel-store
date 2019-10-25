<template>
  <div>
    <NavBar />
    <div class="container-fluid" id="shop">
      <b-breadcrumb :items="items"></b-breadcrumb>
      <div class="row">
        <!-- <div class="col-sm-1  extra"></div> -->
        <div class="col-sm-12 col-md-6">
          <div class="product-images mb-3">
            <img
              class="product-image"
              src="https://m.media-amazon.com/images/I/51MYxkOabGL._SR500,500_.jpg"
              alt
              width="340"
              height="340"
            />
          </div>
        </div>
        <div class="col-sm-12 col-md-6 product-description mt-2">
          <div class="description-inner">
            <h1 class="product-title">{{ product.name }}</h1>
            <div class="brand">
              <img src="https://theordinary.com/Images/logo.svg" alt width="50" height="50" />
              <h6>{{product.brand}}</h6>
            </div>
            <p class="price">
              <span class="price-amount">
                <span class="currency-symbol">KSh</span>
                &nbsp;{{product.price}}
              </span>
            </p>
          </div>
          <div class="short-description">
            <p>{{product.description}}</p>
          </div>
          <div class="stock">
            <p>
              <strong>Available</strong>
            </p>
          </div>
          <div class="wishlist">
            <strong>Wishlist</strong>
          </div>
          <!-- <div class="quantity">
            <p>Quantity</p>
            <div class="dec button">
              <i class="fa fa-minus"></i>
              <span>-</span>
            </div>
            <input type="text" id="quantity" name="quantity" value="1" />
          <div class="inc button">-->
          <!-- <i class="fa fa-plus"></i> -->
          <!-- <span>+</span>
            </div>
          </div>-->
          <div class="add-to-cart">
            <b-button href variant="outline-primary">Add to Cart</b-button>
          </div>
        </div>
      </div>
      <Recommended />
    </div>
    <Footer />
  </div>
</template>

<script>
import axios from "axios";
// import Product from "./Product";
import NavBar from "../components/NavBar";
import Product from "../components/Product";
import Recommended from "../components/Recommended";
import Footer from "../components/Footer";
import { log } from "util";
export default {
  name: "Shop",
  components: {
    NavBar,
    Recommended,
    Footer
  },
  data() {
    return {
      product: [],
      items: [
        {
          text: "Home",
          href: "#"
        },
        {
          text: "Shop",
          href: "#"
        },
        {
          // text: this.product.name,
          text: "The Ordinary Azelaic Acid Suspension 10% 30ml",
          active: true
        }
      ]
    };
  },
  // created() {
  //   this.fetchProduct();
  // },
  beforeMount() {
    let url = `/api/shop/${this.$route.params.id}`;
    axios
      .get(url)
      .then(response => (this.product = response.data))
      .catch(err => console.log(err));
      console.log(this.product.name)
  },
  methods: {
    fetchProduct() {
      let url = `/api/shop/${this.$route.params.id}`;
      fetch(url, {
        headers: {
          "Content-Type": "application/json",
          Accept: "application/json"
        }
      })
        .then(res => res.json())
        .then(data => {
          this.product = data;
        })
        .catch(err => console.log(err));
    }
  }
};
</script>
<style scoped>
.product-title {
  font-size: 1.6rem;
  width: 80%;
}
.price {
  font-size: 18px;
  font-weight: 600;
  letter-spacing: 1px;
}
.product-description {
  border: 1px solid #eee;
  padding: 1.2rem;
}
.short-description {
  letter-spacing: 0.5px;
  line-height: 24px;
  font-size: 14px;
}
.add-to-cart {
  margin-top: 4%;
}
</style>