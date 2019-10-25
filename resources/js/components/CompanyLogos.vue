<template>
  <div>
    <div class="container-fluid logos">
      <div class="row">
        <div class="col logowrap">
          <div class="logo">
            <img
              src="https://images-na.ssl-images-amazon.com/images/G/01/img15/beauty/luxury/logo/25820_beauty_logo-resize_olay_logo-tile_680x295._V310559340_.jpg"
              alt="Olay Logo"
              class="logo-img"
            />
          </div>
        </div>
        <div class="col logowrap">
          <div class="logo">
            <img
              src="https://images-na.ssl-images-amazon.com/images/G/01/img15/beauty/luxury/logo/25820_beauty_logo-resize_aveeno_logo-tile_680x295._V310559666_.jpg"
              alt="Aveeno Active Naturals Logo"
              class="logo-img"
            />
          </div>
        </div>
        <div class="col logowrap">
          <div class="logo">
            <img
              src="https://images-na.ssl-images-amazon.com/images/G/01/img15/beauty/luxury/logo/25820_beauty_logo-resize_bodyshop_logo-tile_680x295._V310559630_.jpg"
              alt="The Body Shop Logo"
              class="logo-img"
            />
          </div>
        </div>
        <div class="col logowrap">
          <div class="logo">
            <img
              src="https://images-na.ssl-images-amazon.com/images/G/01/img15/beauty/luxury/logo/25820_beauty_logo-resize_cerave_logo-tile_680x295._V310559627_.jpg"
              alt="CeraVe Logo"
              class="logo-img"
            />
          </div>
        </div>
        <div class="col logowrap">
          <div class="logo">
            <img
              src="https://images-na.ssl-images-amazon.com/images/G/01/img15/beauty/luxury/logo/25820_beauty_logo-resize_loreal_logo-tile_680x295._V310559636_.jpg"
              alt="Loreal Logo"
              class="logo-img"
            />
          </div>
        </div>
        <div class="col logowrap">
          <div class="logo">
            <img
              src="https://images-na.ssl-images-amazon.com/images/G/01/img15/beauty/luxury/logo/25820_beauty_logo-resize_Neutrogena_logo-tile_680x295._V310559633_.jpg"
              alt="Neutrogena Logo"
              class="logo-img"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "CompanyLogos"
};
</script>
<style scoped>
.logos {
  margin-top: 3%;
  margin: 7% 0;
}
.logowrap {
  padding: 1%;
  border-right: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
}
.logo-img {
  width: 100px;
  height: auto;
}

@media (min-width: 719px) {
  .logowrap {
    border-bottom: none;
  }
  .logowrap:last-child {
    border: none;
  }
}
</style>