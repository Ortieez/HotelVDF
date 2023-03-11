<script lang="ts">
import { Swiper, SwiperSlide } from "swiper/vue";
import { RouterLink } from "vue-router";

import "swiper/css";

import "swiper/css/effect-fade";
import "swiper/css/navigation";
import "swiper/css/pagination";

import "@/assets/swiper.css";

import { EffectFade, Navigation, Pagination, Autoplay } from "swiper";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      pagination: {
        clickable: true,
        renderBullet: function (index: any, className: any) {
          return "<span class=" + className + "></span>";
        },
      },
      modules: [EffectFade, Navigation, Pagination, Autoplay],
    };
  },
};
</script>

<template>
  <swiper
    class="heroSlider"
    :spaceBetween="30"
    :autoplay="{
      delay: 4000,
      disableOnInteraction: false,
    }"
    :loop="true"
    :effect="'fade'"
    :navigation="false"
    :pagination="pagination"
    :modules="modules"
  >
    <swiper-slide class="slide">
      <div data-type="orange" class="text">
        <h1>Ubytování</h1>
        <p>Vzdělávací středisko varnsdorf</p>
        <RouterLink class="link" to="/ubytovani">Více informací</RouterLink>
      </div>
      <img
        src="@/assets/hero/ubytování.jpg"
        alt="VOS, SPŠ a SOŠ Varnsdorf, p.o."
      />
    </swiper-slide>
    <swiper-slide class="slide">
      <div data-type="green" class="text">
        <h1>Restaurace</h1>
        <p>Vzdělávací středisko varnsdorf</p>
        <RouterLink class="link" to="/restaurace">Více informací</RouterLink>
      </div>
      <img
        src="@/assets/hero/VSrestaurace01.jpg"
        alt="VOS, SPŠ a SOŠ Varnsdorf, p.o."
      />
    </swiper-slide>
    <swiper-slide class="slide">
      <div data-type="blue" class="text">
        <h1>Pronájem Prostorů</h1>
        <p>Vzdělávací středisko varnsdorf</p>
        <RouterLink class="link" to="/pronajem">Více informací</RouterLink>
      </div>
      <img
        src="@/assets/hero/pronajem.jpg"
        alt="VOS, SPŠ a SOŠ Varnsdorf, p.o."
      />
    </swiper-slide>
  </swiper>
</template>

<style lang="scss">
.heroSlider {
  height: 100vh;

  .swiper-pagination-bullet {
    background-color: rgba(255, 255, 255, 0);
    border: solid 3px white;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    opacity: 1;
    padding: 2px;
    margin: 10px !important;

    box-sizing: border-box;
    padding: 10px;

    position: absolute;
    bottom: 5rem;
    left: 0.5rem;
  }

  .swiper-pagination-bullet:nth-child(2) {
    left: 3rem;
  }

  .swiper-pagination-bullet:nth-child(3) {
    left: 5.5rem;
  }
  .swiper-pagination-bullet-active {
    opacity: 1;
    background-color: rgb(255, 255, 255);
  }

  .slide {
    .text {
      width: 80%;
      position: absolute;
      bottom: 10rem;
      left: 1rem;
      text-align: left;

      h1 {
        font-size: 2rem;
        font-weight: 700;

        text-transform: uppercase;

        margin: 0;
      }

      p {
        font-size: 1.6rem;
        color: white;
        text-transform: uppercase;
        margin: 5px 0 20px 0;
      }

      .link {
        padding: 0.5rem 1rem;
        color: black;
        text-decoration: none;
        font-weight: 600;
      }

      &[data-type="orange"] {
        h1 {
          color: var(--orange);
        }

        .link {
          background-color: var(--orange);
        }
      }

      &[data-type="green"] {
        h1 {
          color: var(--green);
        }

        .link {
          background-color: var(--green);
        }
      }

      &[data-type="blue"] {
        h1 {
          color: var(--blue);
        }

        .link {
          background-color: var(--blue);
          color: white;
        }
      }
    }

    img {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;

      filter: brightness(0.4);

      z-index: -1;
    }
  }
}
</style>
