<script setup lang="ts">
import HeaderHome from "../components/home/header/HeaderHome.vue";
import HeaderPresentation from "../components/home/HeaderPresentation.vue";
import Products from "../components/home/Products.vue";
import Gallery from "../components/home/Gallery.vue";
import Apps from "../components/home/Apps.vue";
import ProductsCategory from "../components/home/ProductsCategory.vue";
import Cards from "../components/home/Cards.vue";
import FormBox from "../components/home/FormBox.vue";
import Footer from "../components/home/Footer.vue";
import {onMounted, ref} from "vue";
import axios from "axios";
import {Category} from "@/Types/category";

onMounted(() => {
  axios.get('http://localhost/api/categories')
    .then(response => {
      categories.value.push(...response.data)
    })
    .catch(error => {
      console.log(error)
    })
})

const categories = ref<Category[]>([])

const pushCategory = (e: string[]) => {
  e.forEach(arg => {
    categories.value.push({
      id: categories.value.length + 1,
      name: arg
    })
  })
}

</script>

<template>
  <div class="bg-[#EAE8E4]">
    <HeaderHome/>

    <div class="lg:h-[480px] h-[400px] flex items-center lg:rounded-bl-4xl lg:rounded-br-4xl lg:pr-0  lg:p-20 bg-[#2D2D2D]">
      <HeaderPresentation/>
    </div>

    <div class="lg:p-20 p-6">
      <Products class="lg:mt-30 mt-10"/>

      <Gallery class="lg:mt-20 mt-10 xl:pr-5"/>

      <Apps class="lg:mt-20 mt-10 mr-4"/>

      <ProductsCategory class="lg:mt-16 mt-10" :categories="categories"/>

      <Cards class="lg:mt-16 mt-10"/>
    </div>

    <FormBox @saved-categories="(e) => pushCategory(e)" class="lg:mt-16 mt-10"/>

    <Footer/>

  </div>
</template>

<style scoped>

</style>