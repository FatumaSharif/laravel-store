<template>
  <div class="container-fluid blog">
    <h2 class="title">Latest Posts from our Blog</h2>
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div>
          <b-card
            title="Small Changes Equal Big Changes"
            img-src="https://cdn.pixabay.com/photo/2019/09/21/18/37/flowers-4494522_960_720.jpg"
            img-alt="Image"
            img-top
            tag="article"
            class="mb-4"
          >
            <b-card-text>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias maiores iusto sapiente in est sunt nihil asperiores sint quasi eaque labore quam molestias dolorem natus impedit explicabo, omnis suscipit assumenda?</b-card-text>

            <b-button href="#" variant="primary">Read More</b-button>
          </b-card>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div>
          <b-card
            title="Small Changes Equal Big Changes"
            img-src="https://cdn.pixabay.com/photo/2019/09/21/18/37/flowers-4494522_960_720.jpg"
            img-alt="Image"
            img-top
            tag="article"
            class="mb-4"
          >
            <b-card-text>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias maiores iusto sapiente in est sunt nihil asperiores sint quasi eaque labore quam molestias dolorem natus impedit explicabo, omnis suscipit assumenda?</b-card-text>

            <b-button href="#" variant="primary">Read More</b-button>
          </b-card>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div>
          <b-card
            title="Small Changes Equal Big Changes"
            img-src="https://cdn.pixabay.com/photo/2019/09/21/18/37/flowers-4494522_960_720.jpg"
            img-alt="Image"
            img-top
            tag="article"
            class="mb-2"
          >
            <b-card-text>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias maiores iusto sapiente in est sunt nihil asperiores sint quasi eaque labore quam molestias dolorem natus impedit explicabo, omnis suscipit assumenda?</b-card-text>

            <b-button href="#" variant="primary">Read More</b-button>
          </b-card>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Blog"
};
</script>
<style scoped>
.blog {
  margin: 4% 0;
}
.card-body {
  padding: 1em;
}
.card {
  border-radius: 0.1rem;
}
</style>