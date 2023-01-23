<script lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";
import MapComponent from "@/components/MapComponent.vue";

let data = await fetch("http://localhost/vcvdf/server.php");
let result = await data.json();

let headers = []

for (let key in result) {
  headers.push(key);
}

let zodpovednaOsoba = result[headers[3]];
let contacts = [result[headers[4]][0], result[headers[5]][0], result[headers[6]][0], result[headers[7]][0]];
console.log(contacts);

export default {
  name: "ContactView",
  components: {
    HeroStaticComponent,
    HeadingComponent,
    MapComponent
  },
  data() {
    return {
      zodpovednaOsoba,
      contacts
    };
  },
};
</script>

<template>
  <HeroStaticComponent title="Kontakty" source="@/assets/hero/kontakty.jpg" color="orange" :poskytujeme="false" />
  <div class="basic__text">
    <HeadingComponent text="Adresa Vzdělávacího střediska" color="orange" />
    <p>Karlova 3317, 407 47 Varnsdorf</p>
    <p>zodpovědná osoba: {{ zodpovednaOsoba[0] }}</p>
    <p>
      e-mail:
      <a :href="'mailto:' + zodpovednaOsoba[1]">{{ zodpovednaOsoba[1] }}</a>
    </p>
  </div>
  <MapComponent :header="false" />
  <HeadingComponent text="Telefonní Čísla" color="orange" />
  <div class="basic__text">
    <p><b>Kancelář</b> - <a :href="'tel:' + contacts[2]">{{ contacts[2] }}</a></p>
    <p><b>Recepce</b> - <a :href="'tel:' + contacts[0]">{{ contacts[0] }}</a></p>
    <p><b>Pevná</b> - <a :href="'tel:' + contacts[1]">{{ contacts[1]  }}</a></p>
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
