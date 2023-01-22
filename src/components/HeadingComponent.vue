<script lang="ts">
export default {
  name: "HeadingComponent",
  props: {
    text: {
      type: String,
      required: true,
    },
    color: {
      type: String,
      required: true,
    },
  },
};
</script>

<template>
  <div class="heading">
    <h3 :color="color">{{ text }}</h3>
  </div>
</template>

<style lang="scss">
.heading {
  display: flex;
  justify-content: center;
  align-items: center;

  h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: black;
    text-transform: uppercase;
    padding: 0.5rem 1rem;

    &[color="orange"] {
      background-color: var(--orange);
    }

    &[color="green"] {
      background-color: var(--green);
    }

    &[color="blue"] {
      background-color: var(--blue);
      color: white;
    }
  }
}
</style>
