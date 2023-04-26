<script lang="ts">
import HeadingComponent from "@/components/HeadingComponent.vue";
import HeroStaticComponent from "@/components/HeroStaticComponent.vue";
import { sha256 } from "js-sha256";
import { useToast } from "vue-toastification";

export default {
  name: "ContactView",
  components: {
    HeroStaticComponent,
    HeadingComponent,
  },
  setup() {
    const toast = useToast();
    return { toast };
  },
  methods: {
    async onSubmit() {
      let password = null;
      let file = undefined;

      password = document.getElementById("pass");
      file = document.getElementById("file");

      if (password == null || password == undefined) {
        this.toast.error("Nahrání souboru se nezdařilo");
        return;
      }

      if (file == null || file == undefined) {
        this.toast.error("Nahrání souboru se nezdařilo");
        return;
      }

      let HTMLpassword = password as HTMLInputElement;
      let HTMLfile = file as HTMLInputElement;

      if (HTMLfile.files == null || HTMLfile.files == undefined) {
        this.toast.error("Nahrání souboru se nezdařilo");
        return;
      }

      password = HTMLpassword.value;
      file = HTMLfile.files[0];

      if (password == "" || file == undefined) {
        this.toast.error("Vyplňte prosím všechna pole");
        return;
      }

      password = await sha256(password);

      fetch(
        `http://localhost/vcvdf/server.php?mode=upload&password=${password}`,
        {
          method: "POST",
          body: file,
        }
      )
        .then((response) => response.json())
        .then((data) => {
          if (data.code == 200) {
            this.toast.success("Soubor byl úspěšně nahrán");
          } else {
            this.toast.error("Nahrání souboru se nezdařilo");
          }
        })
        .catch((err: any) => {
          this.toast.error("Nahrání souboru se nezdařilo: ", err);
        });
    },
  },
};
</script>

<template>
  <HeroStaticComponent
    title="Nahrání Souborů"
    source="@/assets/hero/upload.webp"
    color="orange"
    :poskytujeme="false"
  />
  <HeadingComponent text="Formulář pro nahrání souboru" color="orange" />
  <div class="basic__text">
    <div class="upload__form">
      <div class="input">
        <label for="fileUpload">Soubor CSV</label>
        <input type="file" name="fileUpload" id="file" accept=".csv" required />
      </div>

      <div class="input">
        <label for="fileUpload">Heslo</label>
        <input type="password" name="password" id="pass" required />
      </div>
      <input type="submit" value="Submit" @click="onSubmit" />
    </div>
  </div>
</template>

<style lang="scss" scoped>
.basic__text {
  display: flex;
  justify-content: center;
  align-items: center;
}

.upload__form {
  width: 30rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  .input {
    display: flex;
    flex-direction: column;
  }

  input {
    margin: 10px 0;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 20rem;
  }

  input[type="submit"] {
    background-color: var(--green);
    color: black;
    font-weight: 600;
    border: none;
    cursor: pointer;
    width: 21.5rem;

    margin-bottom: 2rem;
  }
}
</style>
