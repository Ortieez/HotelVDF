<script lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";

let data = await fetch("http://localhost/vcvdf/server.php");
let result = await data.json();

let headers = []

for (let key in result) {
  headers.push(key);
}

let dataHere = result[headers[2]];

export default {
  name: "RestaurantView",
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
    title="Pronájemprostor"
    source="@/assets/hero/pronajem.jpg"
    color="blue"
  />
  <div class="basic__text">
    <p>
      Možnost <b>pořádání</b> seminářů, rekvalifikací, dalšího profesního
      vzdělávání, tréninkových pobytů a jednání ve stupňovité posluchárně o
      <b>45 místech</b>, interaktivní tabule, dataprojektor, každé místo lze
      připojit k internetu, moderně vybavené učebně výpočetní techniky (<b
        >20 míst</b
      >) a odborné učebně (<b>24 míst</b>), interaktivní tabule, dataprojektor,
      barevný televizor + video.
    </p>
    <p>
      K zázemí posluchárny patří <b>kabinet</b> pro přednášejícího,
      <b>kuchyňka</b> pro přípravu malého občerstvení, restaurace pro stravování
      účastníků.
    </p>
  </div>
  <HeadingComponent text="Cena Pronájmu podle místností" color="blue" />
  <HeadingComponent text="Posluchárna" color="blue" />
  <div class="basic__text">
    <p class="center">{{ dataHere[0] }} Kč/den při <b>vícedenním pronájmu</b></p>
    <p class="center">{{ dataHere[1] }} Kč/hodina při <b>jednodenním pronájmu</b></p>
  </div>
  <HeadingComponent text="Počítačová učebna" color="blue" />
  <div class="basic__text">
    <p class="center">{{ dataHere[2] }} Kč/den při <b>vícedenním pronájmu</b></p>
    <p class="center">{{ dataHere[3] }} Kč/hodina při <b>jednodenním pronájmu</b></p>
  </div>
  <HeadingComponent text="Odborná učebna" color="blue" />
  <div class="basic__text">
    <p class="center">{{ dataHere[4] }} Kč/den</p>
  </div>
  <HeadingComponent text="Zasedací místnost" color="blue" />
  <div class="basic__text">
    <p class="center">{{ dataHere[5] }} Kč/den</p>
    <p class="center">
      Na tyto akce zajistíme dle objednávky malé pohoštění nebo oběd.
    </p>
  </div>
</template>
