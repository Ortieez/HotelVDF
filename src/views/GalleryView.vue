<script lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";
import Lightgallery from "lightgallery/vue";
import lgThumbnail from "lightgallery/plugins/thumbnail";
import lgZoom from "lightgallery/plugins/zoom";

import styles from "lightgallery/scss/lightgallery.scss";

import FirstImage from "@/assets/photogallery/restaurace.webp";
import SecondImage from "@/assets/photogallery/VSrestaurace01.webp";
import ThirdImage from "@/assets/photogallery/VSubytování01.webp";
import FourthImage from "@/assets/photogallery/VSubytování02.webp";
import FifthImage from "@/assets/photogallery/VS-PCučebna01.webp";
import SixthImage from "@/assets/photogallery/VS-posluchárna01.webp";
import SeventhImage from "@/assets/photogallery/VS-posluchárna03.webp";
import EighthImage from "@/assets/photogallery/VS-raut03.webp";

export default {
  components: {
    Lightgallery,
    HeroStaticComponent,
  },
  data: () => ({
    plugins: [lgThumbnail, lgZoom],
    Images: [
      FirstImage,
      SecondImage,
      ThirdImage,
      FourthImage,
      FifthImage,
      SixthImage,
      SeventhImage,
      EighthImage,
    ],
  }),
};
</script>

<template>
  <HeroStaticComponent
    title="Fotogalerie"
    source="@/assets/hero/fotogalerie.webp"
    color="orange"
    :poskytujeme="false"
  />
  <center class="gallery">
    <lightgallery :settings="{ speed: 500, plugins: plugins }">
      <a :href="Images[0]">
        <img alt=" " :src="Images[0]" />
      </a>
      <a :href="Images[1]">
        <img alt=" " :src="Images[1]" />
      </a>
      <a :href="Images[2]">
        <img alt=" " :src="Images[2]" />
      </a>
      <a :href="Images[3]">
        <img alt=" " :src="Images[3]" />
      </a>
      <a :href="Images[4]">
        <img alt=" " :src="Images[4]" />
      </a>
      <a :href="Images[5]">
        <img alt=" " :src="Images[5]" />
      </a>
      <a :href="Images[6]">
        <img alt=" " :src="Images[6]" />
      </a>
      <a :href="Images[7]">
        <img alt=" " :src="Images[7]" />
      </a>
    </lightgallery>
  </center>
</template>

<style lang="scss">
.gallery {
  width: 100%;
  margin: 1rem 0;
}

.lightgallery-vue {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 98%;

  a {
    width: 14rem;
    margin: 5px;

    img {
      width: 100%;
    }

    overflow: hidden;
  }
}

.lg-thumb-outer {
  display: none;
}
</style>
