import Home from "./components/Home";
import Products from "./components/Products";
import Shop from "./components/Shop";
import Cart from "./components/Cart";

export default {
    mode: "history",

    routes: [
        {
            path: "/",
            component: Home
        },
        {
            path: "/products",
            component: Products
        },
        {
            path: "/shop",
            component: Shop
        },
      {
        path: "/cart",
        component: Cart
      }
    ]
};
