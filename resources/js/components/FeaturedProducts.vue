<template>
  <div class="container-fluid">
    <div class="mid-hero">
      <div class="mid-hero-content">
        <p class="mid-hero-title">it's not hoarding if it's skincare</p>
        <a href="" class="mid-hero-shop">
          Shop
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "FeaturedProducts",
};
</script>
<style scoped>
.mid-hero {
  background-image: url(https://images.pexels.com/photos/2457317/pexels-photo-2457317.png?cs=srgb&dl=abstract-abstract-background-art-2457317.jpg&fm=jpg);
  height: 80vh;
  background-size: cover;
  margin: 5% 0;
}
.mid-hero-content {
  text-align: center;
  color: #fff;
  font-size: 250%;
  font-weight: 500;
  padding: 5%;
  letter-spacing: 0.06rem;
  padding-top: 10%;
}
a.mid-hero-shop {
    color: #fff;
    border-bottom: 4px solid #fff;
}
</style>