<template>
  <div class="container-fluid">
    <NavBar />
    <div class="carousel">
      <b-carousel
        id="carousel-1"
        v-model="slide"
        :interval="4000"
        controls
        fade
        indicators
        background="#ababab"
        img-width="1024"
        img-height="480"
        style="text-shadow: 1px 1px 2px #333;"
        @sliding-start="onSlideStart"
        @sliding-end="onSlideEnd"
      >
        <!-- Text slides with image -->
        <b-carousel-slide
          class="b-carousel"
          caption="First slide"
          text="Nulla vitae elit libero, a pharetra augue mollis interdum."
          img-src="https://images.pexels.com/photos/2866796/pexels-photo-2866796.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
        ></b-carousel-slide>
        <b-carousel-slide
          class="b-carousel"
          caption="Second First slide"
          text="Nulla vitae elit libero, a pharetra augue mollis interdum."
          img-src="https://images.pexels.com/photos/2721977/pexels-photo-2721977.jpeg?cs=srgb&dl=assortment-beauty-close-up-2721977.jpg&fm=jpg"
        ></b-carousel-slide>
      </b-carousel>
    </div>
    <CompanyLogos />
    <Categories />
    <hr />
    <h2 class="title">Now Trending</h2>
    <div class="">
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
        <div class="col">
          <Product />
        </div>
      </div>
    </div>
    <FeaturedProducts />
    <StoryBoard />
    <Blog />
    <IgFeed />
    <Footer />
  </div>
</template>

<script>
import NavBar from "./NavBar";
import CompanyLogos from "./CompanyLogos"
import Categories from "./Categories";
import FeaturedProducts from "./FeaturedProducts";
import Product from "./Product";
import StoryBoard from "./StoryBoard";
import Blog from "./Blog";
import IgFeed from "./InstagramFeed";
import Footer from "./Footer";

export default {
  data() {
    return {
      slide: 0,
      sliding: null
    };
  },
  components: {
    NavBar,
    CompanyLogos,
    Categories,
    FeaturedProducts,
    Product,
    StoryBoard,
    Blog,
    IgFeed,
    Footer
  },
  methods: {
    onSlideStart(slide) {
      this.sliding = true;
    },
    onSlideEnd(slide) {
      this.sliding = false;
    }
  }
};
</script>
<style scoped>
.carousel,
.b-carousel {
  height: 50vh;
}
</style>