<script lang="ts">
export default {
  name: "HeroStaticComponent",
  props: {
    title: {
      type: String,
      required: true,
    },
    source: {
      type: String,
      required: true,
    },
    color: {
      type: String,
      required: true,
    },
    poskytujeme: {
      type: Boolean,
      required: false,
      default: true,
    },
  },
};
</script>

<template>
  <div>
    <div class="heroSection">
      <img
        v-if="title == 'Ubytování'"
        src="@/assets/hero/ubytování.jpg"
        alt="Obrázek pro momentální sekci"
      />
      <img
        v-if="title == 'Kontakty'"
        src="@/assets/hero/kontakty.jpg"
        alt="Obrázek pro momentální sekci"
      />
      <img
        v-if="title == 'Fotogalerie'"
        src="@/assets/hero/fotogalerie.jpg"
        alt="Obrázek pro momentální sekci"
      />
      <img
        v-if="title == 'Stránka nenalezena'"
        src="@/assets/hero/nenalezeno.jpg"
        alt="Obrázek pro momentální sekci"
      />
      <img
        v-if="title == 'Pronájemprostor'"
        src="@/assets/hero/pronajem.jpg"
        alt="Obrázek pro momentální sekci"
      />
      <img
        v-if="title == 'Restaurace'"
        src="@/assets/hero/restaurace.jpg"
        alt="Obrázek pro momentální sekci"
      />
      <div class="heroText">
        <h1 :color="color" v-if="title != 'Pronájemprostor'">{{ title }}</h1>
        <h1 :color="color" v-if="title == 'Pronájemprostor'">
          PRONÁJEM PROSTOR
        </h1>
        <img
          v-if="poskytujeme"
          class="heroScroll"
          src="@/assets/scrolldown.svg"
          alt="Scroll down icon"
        />
      </div>
    </div>
    <div v-if="poskytujeme" class="heroPoskytujeme">
      <p :color="color">Co Poskytujeme?</p>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.heroSection {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;

  img:not(.heroScroll) {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.4);
    z-index: 0;
  }

  .heroText {
    position: absolute;
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;

    h1[color="orange"] {
      font-size: 3rem;
      color: var(--orange);
      text-transform: uppercase;
    }

    h1[color="green"] {
      font-size: 3rem;
      color: var(--green);
      text-transform: uppercase;
    }

    h1[color="blue"] {
      font-size: 3rem;
      color: var(--blue);
      text-transform: uppercase;
    }

    .heroScroll {
      position: absolute;
      bottom: 6rem;
    }
  }
}

.heroPoskytujeme {
  width: 100%;
  margin: 0;

  p {
    margin: 0;
    padding: 1.5rem 0;
    font-size: 1.5rem;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;

    &[color="orange"] {
      background-color: var(--orange);
    }

    &[color="green"] {
      background-color: var(--green);
    }

    &[color="blue"] {
      background-color: var(--blue);
      color: white;
    }
  }
}
</style>
