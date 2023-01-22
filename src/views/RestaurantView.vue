<script setup lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";
</script>

<template>
  <HeroStaticComponent
    title="Restaurace"
    source="../src/assets/hero/restaurace.jpg"
    color="green"
  />
  <div class="basic__text">
    <p>
      V <b>moderním</b> a příjemném prostředí restaurace vzdělávacího střediska
      nabízíme <b>denní polední</b> menu, možnost pořádání malých společenských
      akcí, setkání, jednání, rautů či svateb. Restaurace nabízí v letním období
      <b>venkovní posezení</b>.
    </p>
  </div>
  <HeadingComponent text="Cena Menu" color="green" />
  <div class="basic__text">
    <p class="center">95,- Kč (<b>včetně polévky</b>)</p>
  </div>
</template>
