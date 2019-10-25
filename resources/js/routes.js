import Home from "./views/Home";
import Catalog from "./views/Catalog";
import Shop from "./views/Shop";
import Cart from "./views/Cart";

export default {
    mode: "history",

    routes: [
        {
            path: "/",
            component: Home
        },
        {
            path: "/catalog",
            component: Catalog
        },
        {
            path: "/shop",
            component: Shop
        },
        {
          path: "/shop/:id",
          component: Shop
        },
        {
          path: "/cart",
          component: Cart
        }
    ]
};
