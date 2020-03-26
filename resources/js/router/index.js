import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes:
    [
      {
        path: "/vue/item/list",
        name: "item_list",
        component: require("../components/pages/items/List.vue").default
      },
      {
        path: "/vue/*",
        name: "not_found",
        component: require("../components/pages/errors/NotFound.vue").default
      }
    ]
})

export default router