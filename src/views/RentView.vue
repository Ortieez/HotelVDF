<script lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";

export default {
  name: "RestaurantView",
  components: {
    HeroStaticComponent,
    HeadingComponent,
  },
};
</script>

<template>
  <HeroStaticComponent title="Pronájemprostor" source="@/assets/hero/pronajem.webp" color="blue" />
  <div class="basic__text">
    <p>
      Nabízíme možnost pořádání seminářů, rekvalifikací, dalšího profesního vzdělávání, tréninkových
      pobytů a jednání ve stupňovité posluchárně /45 míst, interaktivní tabule, dataprojektor/, v učebně
      /20 míst, interaktivní tabule, dataprojektor/ a zasedací místnosti /10 míst/.
    </p>
    <p>
      K zázemí posluchárny patří kuchyňka pro přípravu malého občerstvení, restaurace pro stravování
      účastníků. Na tyto akce zajistíme dle objednávky malé pohoštění nebo oběd.
    </p>
  </div>
  <HeadingComponent text="Cena Pronájmu podle místností" color="blue" />
  <HeadingComponent text="Posluchárna" color="blue" />
  <div class="basic__text">
    <p class="center">
      1320 Kč/den
    </p>
    <p class="center">
      300 Kč/hodina
    </p>
  </div>
  <HeadingComponent text="Učebna" color="blue" />
  <div class="basic__text">
    <p class="center">
      1320 Kč/den
    </p>
    <p class="center">
      300 Kč/hodina
    </p>
  </div>
  <HeadingComponent text="Zasedací místnost" color="blue" />
  <div class="basic__text">
    <p class="center">480 Kč/den</p>
  </div>
</template>
