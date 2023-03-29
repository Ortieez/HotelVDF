<script setup lang="ts">
import { RouterLink } from "vue-router";

let menuState = false;

function changeMenuState() {
  let menuHamburger = document.getElementById("menuHamburger");
  menuHamburger?.classList.toggle("change");
  menuState = !menuState;

  let menu = document.getElementById("menu");
  menu?.classList.toggle("opened");
}
</script>

<template>
  <div class="headerComponent">
    <header id="header">
      <div class="header__logo" id="header__logo">
        <img
          id="logo"
          src="@/assets/logo.svg"
          alt="Logo VOS, SPŠ a SOŠ Školy Varnsdorf"
        />
        <h1 id="headerText">VOŠ, SPŠ a SOŠ, <br />Varnsdorf, p.o.</h1>
      </div>
      <div id="menuHamburger" class="container" v-on:click="changeMenuState">
        <div class="bar1 bar"></div>
        <div class="bar2 bar"></div>
        <div class="bar3 bar"></div>
      </div>
      <div class="menu" id="menu">
        <RouterLink to="/" v-on:click="changeMenuState">Úvod</RouterLink>
        <RouterLink to="/ubytovani" v-on:click="changeMenuState"
          >Ubytování</RouterLink
        >
        <RouterLink to="/restaurace" v-on:click="changeMenuState"
          >Restaurace</RouterLink
        >
        <RouterLink to="/pronajem" v-on:click="changeMenuState"
          >Pronájem</RouterLink
        >
        <div class="line"></div>
        <RouterLink to="/kontakt" v-on:click="changeMenuState"
          >Kontakt</RouterLink
        >
        <RouterLink to="/fotogalerie" v-on:click="changeMenuState"
          >Fotogalerie</RouterLink
        >
        <!-- <RouterLink to="/upload" v-on:click="changeMenuState"
          >Nahrání Souborů</RouterLink
        > -->
      </div>
    </header>
  </div>
</template>

<style lang="scss" scoped>
.headerComponent {
  position: absolute;
  top: 0;
  left: 0;

  width: 100%;
}

.line {
  width: 40px;
  height: 4px;

  margin: 10px 0;
  border-radius: 40px;

  background-color: black;
}

header {
  display: flex;
  flex-direction: row;
  align-items: center;
  width: 100%;

  h1 {
    margin-left: 1rem;
    color: white;
    font-size: 18px;
  }

  #header__logo {
    opacity: 1;
    transition: opacity 0.5s cubic-bezier(0.25, 1, 0.5, 1);
  }

  .header__logo {
    display: inline-flex;
    margin: 15px;

    img {
      width: 70px;
    }
  }

  .menu {
    position: fixed;
    visibility: hidden;
    top: 0;
    right: 0;
    width: 0vw;
    height: 100vh;
    background-color: var(--green);
    transition: 0.5s cubic-bezier(0.25, 1, 0.5, 1);
    z-index: 1;

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    a {
      margin: 1rem;
      font-weight: 700;
      color: black;
      text-decoration: none;
      font-size: 32px;
    }

    a,
    .line {
      opacity: 0;
      transition: opacity 0.3s cubic-bezier(0.25, 1, 0.5, 1);
    }
  }

  .opened {
    visibility: visible;
    width: 100vw;

    a,
    .line {
      opacity: 1;
    }
  }
}

.container {
  z-index: 2;
  display: inline-block;
  cursor: pointer;

  margin-left: auto;
  margin-right: 20px;

  .bar1,
  .bar2,
  .bar3 {
    width: 40px;
    height: 5.5px;
    background-color: #ffffff;
    margin: 6px 0;
    transition: 0.4s ease-in-out;
    border-radius: 15px;
  }
}

.scroll_bar {
  .bar1,
  .bar2,
  .bar3 {
    background-color: var(--orange);
  }
}

.change {
  .bar1,
  .bar2,
  .bar3 {
    background-color: #000000;
  }

  .bar1 {
    transform: translate(0, 11px) rotate(-45deg);
  }

  .bar2 {
    opacity: 0;
  }

  .bar3 {
    transform: translate(0px, -11px) rotate(45deg);
  }
}
</style>
