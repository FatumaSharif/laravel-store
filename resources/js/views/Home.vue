<template>
  <div>
    <NavBar />
    <div class="container-fluid">
      <Carousel />
      <CompanyLogos />
      <Categories />
      <TrendingProducts />
      <FeaturedProducts />
      <StoryBoard />
      <Blog />
      <IgFeed />
      <Footer />
    </div>
  </div>
</template>

<script>
import NavBar from "../components/NavBar";
import Carousel from "../components/Carousel";
import CompanyLogos from "../components/CompanyLogos";
import Categories from "../components/Categories";
import TrendingProducts from "../components/TrendingProducts";
import FeaturedProducts from "../components/FeaturedProducts";
import Product from "../components/Product";
import StoryBoard from "../components/StoryBoard";
import Blog from "../components/Blog";
import IgFeed from "../components/InstagramFeed";
import Footer from "../components/Footer";

export default {
  name: "Home",
  components: {
    NavBar,
    Carousel,
    CompanyLogos,
    Categories,
    TrendingProducts,
    FeaturedProducts,
    Product,
    StoryBoard,
    Blog,
    IgFeed,
    Footer
  }
};
</script>
<style >
.carousel,
.b-carousel {
  height: 75vh;
}
.carousel-caption h3 {
  font-size: 3rem;
  color: indianred;
}
.carousel-caption p {
  font-size: 2rem;
}
</style>