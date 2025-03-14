<script setup>
import Menu from "./partials/Menu.vue";
import {ref} from "vue";

const categories = ref([
    'Categoria 1',
    'Categoria 2',
    'Categoria 3',
    'Categoria 4',
])

</script>

<template>
  <div class="navbar lg:px-20 flex content-center items-center absolute top-0 left-0 right-0 z-50 px-6">
    <div class="navbar-start content-between w-40 mr-10">
      <img src="/images/logo.png" alt=".monks">
      <Menu/>
    </div>
    <div class="navbar-start">
      <div class="hidden lg:flex">
        <ul class="flex content-between gap-10">
          <li v-for="category in categories">
            <a class="font-thin text-primary">{{ category }}</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>