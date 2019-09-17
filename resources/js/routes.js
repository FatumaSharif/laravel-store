import Home from "./components/Home";
import Products from "./components/Products";

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
        }
    ]
};
