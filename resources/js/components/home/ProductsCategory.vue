<script setup lang="ts">
import {Category} from "@/Types/category";

interface Props {
  categories: Category[]
}

defineProps<Props>()

</script>

<template>
  <div>
    <h1 class="text-5xl text-black text-center lg:text-left">Lorem ipsum dolor sit amet consectetur</h1>

    <div class="flex flex-wrap gap-6 mt-10 items-center justify-center">
      <button v-for="category in categories" class="btn xl:btn-lg btn-outline btn-secondary rounded-4xl lx:px-10">
        {{ category.name }}
      </button>
    </div>
  </div>
</template>

<style scoped>

</style>