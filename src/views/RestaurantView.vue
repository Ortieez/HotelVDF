<script lang="ts">
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import HeadingComponent from "@/components/HeadingComponent.vue";

async function getData() {
  let data = await fetch("http://localhost/vcvdf/server.php");
  let result = await data.json();

  let headers = [];

  for (let key in result) {
    headers.push(key);
  }

  let dataHere = result[headers[1]];

  return dataHere;
}

export default {
  name: "RestaurantView",
  components: {
    HeroStaticComponent,
    HeadingComponent,
  },
  data() {
    return {
      dataHere: [],
    };
  },
  mounted() {
    getData().then((data) => {
      this.dataHere = data;
    });
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
      V <b>moderním</b> a příjemném prostředí restaurace vzdělávacího střediska
      nabízíme <b>denní polední</b> menu, možnost pořádání malých společenských
      akcí, setkání, jednání, rautů či svateb. Restaurace nabízí v letním období
      <b>venkovní posezení</b>.
    </p>
  </div>
  <HeadingComponent text="Cena Menu" color="green" />
  <div class="basic__text">
    <p class="center">{{ dataHere[0] }},- Kč (<b>včetně polévky</b>)</p>
  </div>
</template>
