<script setup lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";
import MapComponent from "@/components/MapComponent.vue";
</script>

<template>
  <HeroStaticComponent
    title="Kontakty"
    source="../src/assets/hero/kontaky.jpg"
    color="orange"
    :poskytujeme="false"
  />
  <div class="basic__text">
    <HeadingComponent text="Adresa Vzdělávacího střediska" color="orange" />
    <p>Karlova 3317, 407 47 Varnsdorf</p>
    <p>zodpovědná osoba: Petra Sedláčková</p>
    <p>
      e-mail:
      <a href="mailto:petra.sedlackova@skolavdf.cz"
        >petra.sedlackova@skolavdf.cz</a
      >
    </p>
  </div>
  <MapComponent :header="false" />
  <HeadingComponent text="Telefonní Čísla" color="orange" />
  <div class="basic__text">
    <p><b>Kancelář</b> - <a href="tel:739 418 147">739 418 147</a></p>
    <p><b>Recepce</b> - <a href="tel:775 475 549">775 475 549</a></p>
    <p><b>Pevná</b> - <a href="tel:412 331 160">412 331 160</a></p>
  </div>
  <HeadingComponent text="Fakturační adresa" color="orange" />
  <div class="basic__text">
    <p class="center">
      Vyšší odborná škola, Střední průmyslová škola a Střední odborná škola
      služeb a cestovního ruchu, Varnsdorf, Bratislavská 2166, příspěvková
      organizace
    </p>
    <p>Bratislavská 2166, 407 47 Varnsdorf</p>
    <p>IČ: <b>18383874</b></p>
  </div>
</template>

<style lang="scss" scoped>
.basic__text {
  p a {
    color: var(--orange);
  }
}
</style>
