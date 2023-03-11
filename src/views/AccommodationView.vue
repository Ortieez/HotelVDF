<script lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";

export default {
  name: "AccommodationView",
  components: {
    HeroStaticComponent,
    HeadingComponent,
  },
};
</script>

<template>
  <HeroStaticComponent
    title="Ubytování"
    source="@/assets/hero/VSubytování02.png"
    color="orange"
  />
  <div class="basic__text">
    <p>
      Ubytovací zařízení je umístěno v klidné části města, nedaleko státní hranice. Místo, ze kterého
      můžete pořádat výlety jak do oblasti Českého Švýcarska, tak do okolí v Sasku, nabízí nepřeberné
      možnosti sportovního i turistického vyžití, perfektní cyklostezky, aquaparky, památky a další
      zajímavosti.
    </p>
    <p>
      Poskytujeme ubytování ve 12 dvoulůžkových pokojích s vlastním sociálním zařízením, malou
      ledničkou, fénem a připojením k internetu (WI-FI).
    </p>
  </div>
  <HeadingComponent text="Cena ubytování na osobu" color="orange" />
  <div class="basic__text">
    <p>Noc - 570 Kč <b>bez snídaně</b></p>
    <p>Noc - 690 Kč <b>se snídaní</b></p>
    <p class="center">
      Domácí mazlíčky ubytováváme se svolením za 100 Kč/noc.
    </p>
  </div>
</template>

<style lang="scss"></style>
