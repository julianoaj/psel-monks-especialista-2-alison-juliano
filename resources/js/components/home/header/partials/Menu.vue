<script setup>

import {ref} from "vue";

const categories = ref([
    '. Categoria 1',
    '. Categoria 2',
    '. Categoria 3',
    '. Categoria 4',
])
</script>

<template>
  <div class="dropdown dropdown-center">
    <!-- Hamburger Button for mobile -->
    <label tabindex="0" class="btn btn-ghost lg:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </label>
    <!-- Dropdown Menu with Accordion -->
    <ul class="dropdown-content menu bg-[#2D2D2D] rounded-box w-100 fixed text-center text-gray-200">
      <li v-for="category in categories" class="py-4 hover:bg-gray-100"><a>{{ category }}</a></li>
    </ul>
  </div>
</template>

<style scoped>
</style>