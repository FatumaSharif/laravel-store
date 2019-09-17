<template>
  <div class="container-fluid">
    <h2 class="title">Categories</h2>
    <div class="row categories">
      <div class="col category-1">
        <p class="title-1">perfume</p>
      </div>
      <div class="col category-2">
        <p class="title-2 mx-auto">jewellery</p>
      </div>
      <div class="col category-3">
        <p class="title-3 mx-auto">makeup</p>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Categories"
};
</script>
<style scoped>
.container-fluid {
  margin: 5% 0;
}
.categories {
  height: 35vh;
  margin: 2%;
}
.category-1,
.category-2,
.category-3 {
  height: 150px;
  padding: 1%;
}
.title-1,
.title-2,
.title-3 {
  background-image: url(https://images.pexels.com/photos/932577/pexels-photo-932577.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
  background-size: cover;
  height: 220px;
  text-align: center;
  padding-top: 25%;
  color: #fff;
  text-transform: uppercase;
  font-weight: 700;
  font-size: 150%;
}
.title-1 {
  background-image: url(https://images.pexels.com/photos/965731/pexels-photo-965731.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
}
.title-2 {
  background-image: url(https://images.pexels.com/photos/965731/pexels-photo-965731.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
  /* background-image: url(https://images.pexels.com/photos/932577/pexels-photo-932577.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); */
}
.title-3 {
  background-image: url(https://images.pexels.com/photos/965731/pexels-photo-965731.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
}
</style>