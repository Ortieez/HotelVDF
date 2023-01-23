<script lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";

let data = await fetch("http://localhost/vcvdf/server.php");
let result = await data.json();

let headers = []

for (let key in result) {
  headers.push(key);
}

let dataHere = result[headers[0]];

export default {
  name: "AccommodationView",
  components: {
    HeroStaticComponent,
    HeadingComponent,
  },
  data() {
    return {
      dataHere,
    };
  },
};
</script>

<template>
  <HeroStaticComponent
    title="Ubytování"
    source="@/assets/hero/ubytování.jpg"
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
    <p>Noc - {{ dataHere[0] }},- Kč <b>bez snídaně</b></p>
    <p>Noc - {{ dataHere[1]  }},- Kč <b>bez snídaně</b></p>
    <p class="center">
      Slevy individuální - skupiny,<br />
      dlouhodobé pobyty.
    </p>
  </div>
</template>

<style lang="scss"></style>
