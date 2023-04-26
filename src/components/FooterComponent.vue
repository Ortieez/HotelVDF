<script lang="ts">
export default {
  name: "FooterComponent",
};
</script>

<template>
  <footer class="footer">
    <div class="footer__head">
      <p>Vzdělávací středisko při VOŠ, SPŠ a SOŠ , Varnsdorf, p.o.</p>
      <p>Karlova 3317, 407 47 Varnsdorf</p>
    </div>
    <div class="footer__contacts">
      <p>
        Recepce:
        <b
          ><a :href="'tel:+420775475549'">+420 775 475 549</a></b
        >
      </p>
      <p>
        Restaurace:
        <b
          ><a :href="'tel:+420739096172'">+420 739 096 172</a></b
        >
      </p>
      <p>
        Kancelář:
        <b
          ><a :href="'tel:+420739418147'">+420 739 418 147</a></b
        >
      </p>
      <br />
      <a href="mailto:petra.sedlackova@skolavdf.cz" class="email"
        >petra.sedlackova@skolavdf.cz</a
      >
      &nbsp;
      <a href="mailto:hotelrecepce@skolavdf.cz" class="email"
        >hotelrecepce@skolavdf.cz</a
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
