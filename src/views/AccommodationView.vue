<script setup lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";
</script>

<template>
  <HeroStaticComponent
    title="Ubytování"
    source="../src/assets/hero/ubytování.jpg"
    color="orange"
  />
  <div class="basic__text">
    <p>
      Ubytování ve <b>12</b> dvoulůžkových pokojích s vlastním sociálním
      zařízením a připojením k internetu (WI-FI).
    </p>
    <p>
      Ubytovací zařízení je umístěno v <b>klidné</b> části města ve výhodné
      poloze blízko státní hranice, která je vhodná pro výlety jak do oblasti
      <b>Českého Švýcarska</b>, tak do okolí v Sasku, které nabízí nepřeberné
      možnosti sportovního i turistického vyžití, perfektní cyklostezky,
      aquaparky, památky a <b>další zajímavosti</b>.
    </p>
  </div>
  <HeadingComponent text="Cena ubytování na osobu" color="orange" />
  <div class="basic__text">
    <p>Noc - 460,- Kč <b>bez snídaně</b></p>
    <p>Noc - 560,- Kč <b>bez snídaně</b></p>
    <p class="center">
      Slevy individuální - skupiny,<br />
      dlouhodobé pobyty.
    </p>
  </div>
</template>

<style lang="scss"></style>
