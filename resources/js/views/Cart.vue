<template>
  <div>
    <NavBar />
    <div class="container cart">
      <b-breadcrumb :items="breadcrumbs"></b-breadcrumb>
      <div class="item-added">
        <b-alert variant="success" show>Item was added to your cart!</b-alert>
      </div>
      <div class="items-in-cart">
        <h4>1 item(s) in Shopping Cart</h4>
      </div>
      <b-table responsive outlined :items="items">
        <template v-slot:cell(Image)="data">
          <span v-html="data.value"></span>
        </template>
      </b-table>
      <div class="coupon">
        <h5 class="coupon-title">Have a Code?</h5>
        <b-row class="my-1">
          <b-col sm="3">
            <b-form-input id="input-large" size="lg" placeholder="coupon code"></b-form-input>
          </b-col>
          <b-col sm="1">
            <b-button variant="outline-primary" class="mt-2">Apply</b-button>
          </b-col>
        </b-row>
      </div>
      <div class="cost">
        <b-row>
          <b-col sm="9">
            <div class="total-cost">
              <h4 class="cost-title">Total Cost</h4>
              <b-table-simple hover small caption-top stacked>
                <b-tbody>
                  <b-tr>
                    <b-th stacked-heading="Cost">Price</b-th>
                    <b-td stacked-heading="Cost: Price">KES 2150</b-td>
                  </b-tr>
                  <b-tr>
                    <b-th stacked-heading="Cost">Shipping</b-th>
                    <b-td stacked-heading="Cost: Shipping">FREE</b-td>
                  </b-tr>
                  <b-tr>
                    <b-th stacked-heading="Cost">VAT TAX</b-th>
                    <b-td stacked-heading="Cost: Tax">16%</b-td>
                  </b-tr>
                </b-tbody>
                <b-tfoot>
                  <b-tr>
                    <b-td colspan="3" variant="success" class="text-center">
                      Total
                      <b>KES 2150</b>
                    </b-td>
                  </b-tr>
                </b-tfoot>
              </b-table-simple>
            </div>
          </b-col>
          <b-col sm="3"></b-col>
        </b-row>
      </div>
      <div class="resolve">
        <b-row>
          <b-col class="shop" align-self="start">
            <b-button variant="outline-primary">Continue Shopping</b-button>
          </b-col>
          <b-col class="pay" align-self="end">
            <b-button variant="outline-primary">Proceed to Checkout</b-button>
          </b-col>
        </b-row>
      </div>
    </div>
    <Footer />
  </div>
</template>

<script>
import NavBar from "../components/NavBar";
import Footer from "../components/Footer";

export default {
  name: "Cart",
  components: {
    NavBar,
    Footer
  },
  data() {
    return {
      items: [
        {
          Image:
            '<img class="mx-auto d-block" src="https://m.media-amazon.com/images/I/51MYxkOabGL._SR500,500_.jpg" width="50" height="50"/>',
          Product: "The Ordinary Glycolic Acid 7% Toning Solution 240ml",
          Quantity: "1",
          Total: "KES 1250"
        }
      ],
      breadcrumbs: [
        {
          text: "Home",
          href: "#"
        },
        {
          text: "Products",
          href: "#"
        },
        {
          text: "The Ordinary Azelaic Acid Suspension 10% 30ml",
          href: "#"
        },
        {
          text: "Cart",
          active: true
        }
      ]
    };
  }
};
</script>
<style scoped>
.cart {
  margin-top: 3%;
  margin-bottom: 3%;
}
.table td,
.table th {
  font-size: 16px;
}
.cost {
  margin: 4% 0 1% 0;
}
.items-in-cart h4{
  padding: 1% 0;
  font-size: 20px;
}
.coupon {
    margin: 2% 0;
}
.coupon h5,
.cost-title {
  font-size: 20px;
}
.cost-title {
  margin-bottom: 2%;
}
</style>