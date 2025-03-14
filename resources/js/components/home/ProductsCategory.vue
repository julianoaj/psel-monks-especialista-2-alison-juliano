<script setup>
import {ref} from "vue";

const categories = ref([
    'Perfumaria', 'Corpo e Banho', 'Hidratante',
    'Desodorante', 'Cabelos', 'Maquiagem',
    'Rosto', 'Casa', 'Infantil',
    'Shampoo', 'Sabonete', 'Body splash',
    'Óleo corporal', 'Corretivo', 'Proteção solar',
])
</script>

<template>
  <div>
    <h1 class="text-5xl text-black text-center lg:text-left">Lorem ipsum dolor sit amet consectetur</h1>

    <div class="flex flex-wrap gap-6 mt-10 items-center justify-center">
      <button v-for="category in categories" class="btn xl:btn-lg btn-outline btn-secondary rounded-4xl lx:px-10">
        {{ category }}
      </button>
    </div>
  </div>
</template>

<style scoped>

</style>