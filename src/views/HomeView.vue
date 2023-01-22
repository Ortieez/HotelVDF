<script setup lang="ts">
import HeroComponent from "@/components/HeroSliderComponent.vue";
import MapComponent from "@/components/MapComponent.vue";
</script>

<template>
  <div class="home__container">
    <HeroComponent class="hero" />
    <div class="home__box">
      <p>Vítáme Vás na stránkách našeho vzdělávacího střediska</p>
    </div>
    <div class="home__long-text">
      <p>
        Nabízíme Vám jen ty <b>nejkvalitnější</b> služby v daném oboru.
        Neváhejte a využijte těchto služeb, které realizujeme v rámci vzdělávání
        našich žáků. Náš personál je Vám vždy <b>plně k dispozici</b>. Naší
        předností je neustálé zkvalitňování a vylepšování námi nabízených
        služeb. Důkazem stále vzrůstající počet spokojených zákazníků.
      </p>
    </div>
    <MapComponent />
  </div>
</template>

<style lang="scss" scoped>
.home__container {
  width: 100%;

  .hero {
    margin-bottom: 0;
  }

  .home__box {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    align-content: center;

    width: 100%;
    background-color: var(--orange);

    height: 5rem;

    p {
      font-size: 1.2rem;
      font-weight: 700;
      width: 85%;
      margin: 0;
    }
  }

  .home__long-text {
    width: 100%;
    padding: 2rem 0;

    p {
      font-size: 1.2rem;
      width: 80%;
      margin: 0 auto;
    }
  }
}
</style>
