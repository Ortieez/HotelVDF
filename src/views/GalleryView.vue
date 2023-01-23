<script lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";
import Lightgallery from "lightgallery/vue";
import lgThumbnail from "lightgallery/plugins/thumbnail";
import lgZoom from "lightgallery/plugins/zoom";

import styles from "lightgallery/scss/lightgallery.scss";

import FirstImage from "@/assets/photogallery/20160720_100057.jpg";
import SecondImage from "@/assets/photogallery/IMG_20180829_132832.jpg";
import ThirdImage from "@/assets/photogallery/IMG_20180829_132941.jpg";
import FourthImage from "@/assets/photogallery/IMG-20170530-WA0002.jpg";
import FifthImage from "@/assets/photogallery/VS-PCučebna01.jpg";
import SixthImage from "@/assets/photogallery/VS-posluchárna01.jpg";
import SeventhImage from "@/assets/photogallery/VS-posluchárna03.jpg";
import EighthImage from "@/assets/photogallery/VS-raut03.jpg";
import NinthImage from "@/assets/photogallery/VS-recepce.jpg";


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
      NinthImage,]
  }),
};
</script>

<template>
  <HeroStaticComponent title="Fotogalerie" source="@/assets/hero/fotogalerie.jpg" color="orange" :poskytujeme="false" />
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
      <a :href="Images[8]">
        <img alt=" " :src="Images[8]" />
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
