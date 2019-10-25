<template>
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
        caption="Larosa Beauty"
        text="Definite Beauty Defining You"
        img-src="https://images.pexels.com/photos/2866796/pexels-photo-2866796.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
        img-width="1024"
        img-height="480"
      ></b-carousel-slide>
      <b-carousel-slide
        class="b-carousel"
        caption="Larosa Beauty"
        text="Definite Beauty Defining You"
        img-src="https://images.pexels.com/photos/2866796/pexels-photo-2866796.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
        img-width="1024"
        img-height="480"
      ></b-carousel-slide>
    </b-carousel>
  </div>
</template>
<script>
export default {
  name: "Carousel",
  data() {
    return {
      slide: 0,
      sliding: null
    };
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