<script lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";
import Lightgallery from "lightgallery/vue";
import lgThumbnail from "lightgallery/plugins/thumbnail";
import lgZoom from "lightgallery/plugins/zoom";

import styles from "lightgallery/scss/lightgallery.scss";

export default {
  components: {
    Lightgallery,
    HeroStaticComponent,
  },
  data: () => ({
    plugins: [lgThumbnail, lgZoom],
  }),
};
</script>

<template>
  <HeroStaticComponent
    title="Fotogalerie"
    source="../src/assets/hero/fotogalerie.jpg"
    color="orange"
    :poskytujeme="false"
  />
  <center class="gallery">
    <lightgallery :settings="{ speed: 500, plugins: plugins }">
      <a href="../src/assets/photogallery/20160720_095925.jpg">
        <img alt=" " src="@/assets/photogallery/20160720_095925.jpg" />
      </a>
      <a href="../src/assets/photogallery/20160720_100057.jpg">
        <img alt=" " src="@/assets/photogallery/20160720_100057.jpg" />
      </a>
      <a href="../src/assets/photogallery/IMG_20180829_132832.jpg">
        <img alt=" " src="@/assets/photogallery/IMG_20180829_132832.jpg" />
      </a>
      <a href="../src/assets/photogallery/IMG_20180829_132941.jpg">
        <img alt=" " src="@/assets/photogallery/IMG_20180829_132941.jpg" />
      </a>
      <a href="../src/assets/photogallery/IMG-20170530-WA0002.jpg">
        <img alt=" " src="@/assets/photogallery/IMG-20170530-WA0002.jpg" />
      </a>
      <a href="../src/assets/photogallery/VS - PC učebna 01.jpg">
        <img alt=" " src="@/assets/photogallery/VS - PC učebna 01.jpg" />
      </a>
      <a href="../src/assets/photogallery/VS - posluchárna 01.jpg">
        <img alt=" " src="@/assets/photogallery/VS - posluchárna 01.jpg" />
      </a>
      <a href="../src/assets/photogallery/VS - posluchárna 03.jpg">
        <img alt=" " src="@/assets/photogallery/VS - posluchárna 03.jpg" />
      </a>
      <a href="../src/assets/photogallery/VS - raut 03.jpg">
        <img alt=" " src="@/assets/photogallery/VS - raut 03.jpg" />
      </a>
      <a href="../src/assets/photogallery/VS - recepce.jpg">
        <img alt=" " src="@/assets/photogallery/VS - recepce.jpg" />
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
