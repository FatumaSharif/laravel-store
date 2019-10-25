<template>
  <div>
    <div class="container-fluid banner-bottom">
      <div class="row">
        <div centered class="col banner-bottom-right">
          <h3 class="banner-title">#DewySkin</h3>
          <p
            class="banner-content"
          >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste corrupti impedit soluta autem nulla fuga</p>
        </div>
        <div class="col banner-bottom-right">
          <h3 class="banner-title">#MatteLipstick</h3>
          <p
            class="banner-content"
          >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste corrupti impedit soluta autem nulla fuga</p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "StoryBoard"
};
</script>
<style scoped>
.banner-bottom-right,
banner-bottom-left {
  background-image: url(https://images.pexels.com/photos/2700532/pexels-photo-2700532.jpeg?cs=srgb&dl=aeroplane-air-aircraft-2700532.jpg&fm=jpg);
  background-size: cover;
  height: 300px;
  margin: 5% 1%;
  text-align: center;
  padding-top: 15%;
  color: #eee;
  font-weight: 600;
  line-height: 28px;
  letter-spacing: 0.08rem;
}

@media (min-width: 505px) {
  .banner-bottom-right,
  .banner-bottom-left {
    padding-top: 7%;
  }
}
</style>