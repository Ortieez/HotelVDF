<script lang="ts">
export default {
  name: "MapComponent",
  props: {
    header: {
      type: Boolean,
      default: true,
    },
  },
};
</script>

<template>
  <div class="home__map">
    <div v-if="header" class="map__header">
      <p>Najdete nás zde</p>
    </div>
    <div class="map__image">
      <iframe
        title="map"
        src="https://umap.openstreetmap.fr/en/map/varnsdorf_859946"
        frameborder="0"
      ></iframe>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.home__map {
  display: flex;
  flex-direction: column;
  align-items: center;

  .map__header {
    margin-top: 1rem;
    z-index: 10;
    position: relative;
    margin-bottom: -20px;

    p {
      text-align: center;
      font-size: 1.3rem;
      font-weight: 500;
      text-transform: uppercase;
      margin: 0;
      padding: 0.5rem 2rem;
      background-color: var(--orange);
    }
  }

  .map__image {
    width: 100%;
    height: 25rem;
    margin: 0 auto;
    overflow: hidden;
    z-index: 9;
    position: relative;

    iframe {
      width: 100%;
      height: 100%;
    }
  }
}
</style>
