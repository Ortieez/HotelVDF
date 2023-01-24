<script lang="ts">
let data = await fetch("http://localhost/vcvdf/server.php");
let result = await data.json();

let headers = [];

for (let key in result) {
  headers.push(key);
}

let contacts = [
  result[headers[4]][0],
  result[headers[5]][0],
  result[headers[6]][0],
  result[headers[7]][0],
];

export default {
  name: "FooterComponent",
  data() {
    return {
      contacts,
    };
  },
};
</script>

<template>
  <footer class="footer">
    <div class="footer__head">
      <p>VOŠ, SPŠ a SOŠ , Varnsdorf, p,o.</p>
      <p>Karlova 3317, 407 47</p>
    </div>
    <div class="footer__contacts">
      <p>
        Recepce:
        <b
          ><a :href="'tel:' + contacts[0]">{{ contacts[0] }}</a></b
        >
      </p>
      <p>
        Pevná linka:
        <b
          ><a :href="'tel:' + contacts[1]">{{ contacts[1] }}</a></b
        >
      </p>
      <p>
        Restaurace:
        <b
          ><a :href="'tel:' + contacts[2]">{{ contacts[2] }}</a></b
        >
      </p>
      <p>
        Kancelář:
        <b
          ><a :href="'tel:' + contacts[3]">{{ contacts[3] }}</a></b
        >
      </p>
      <br />
      <a href="mailto:petra.sedlackova@skolavdf.cz" class="email"
        >petra.sedlackova@skolavdf.cz</a
      >
    </div>
    <div class="footer__copyrights">
      <p>© Adam Lipert 2023. Všechna práva vyhrazena.</p>
    </div>
  </footer>
</template>

<style lang="scss" scoped>
footer {
  font-size: 1rem;
  width: 100%;
  background-color: #2b2b2b;
  color: white;

  text-decoration: none;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 1.5rem 0;

  p {
    margin: 0;
  }

  .footer__head {
    p:nth-child(1) {
      font-size: 1.1rem;
      font-weight: 700;
    }

    margin-bottom: 1rem;
  }

  .footer__contacts {
    margin-bottom: 1rem;

    p a {
      text-decoration: none;
      color: white;
    }

    .email {
      color: white;
    }
  }

  .footer__copyrights {
    opacity: 0.5;
  }
}
</style>
