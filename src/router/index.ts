import { createRouter, createWebHistory } from "vue-router";
import HomeView from "@/views/HomeView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "Úvod",
      component: HomeView,
    },
    {
      path: "/ubytovani",
      name: "Ubytování",
      component: () => import("../views/AccommodationView.vue"),
    },
    {
      path: "/restaurace",
      name: "Restaurace",
      component: () => import("../views/RestaurantView.vue"),
    },
    {
      path: "/pronajem",
      name: "Pronájem",
      component: () => import("../views/RentView.vue"),
    },
    {
      path: "/kontakt",
      name: "Kontakt",
      component: () => import("../views/ContactView.vue"),
    },
    {
      path: "/fotogalerie",
      name: "Fotogalerie",
      component: () => import("../views/GalleryView.vue"),
    },
    {
      path: "/upload",
      name: "Nahrání CSV",
      component: () => import("../views/UploadView.vue"),
    },
    {
      path: "/:pathMatch(.*)*",
      name: "404",
      component: () => import("../views/NotFoundView.vue"),
    },
  ],
});

export default router;
