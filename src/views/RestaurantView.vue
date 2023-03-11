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
  <HeroStaticComponent
    title="Restaurace"
    source="@/assets/hero/VSrestaurace01.jpg"
    color="green"
  />
  <div class="basic__text">
    <p>
      V moderním a příjemném prostředí restaurace Vzdělávacího střediska nabízíme denní polední menu.
      Restaurace nabízí v letním období venkovní posezení. Na požádání připravujeme rautové občerstvení
      s sebou.
    </p>
  </div>
  <HeadingComponent text="Cena Menu" color="green" />
  <div class="basic__text">
    <p>Polévka - 30 Kč</p>
    <p>Hlavní jídlo - 120 Kč</p>
  </div>
</template>
