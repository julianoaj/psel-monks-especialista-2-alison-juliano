<script setup>
import HeaderHome from "../components/home/header/HeaderHome.vue";
import HeaderPresentation from "../components/home/HeaderPresentation.vue";
import Products from "../components/home/Products.vue";
import Gallery from "../components/home/Gallery.vue";
import Apps from "../components/home/Apps.vue";
import ProductsCategory from "../components/home/ProductsCategory.vue";
import Cards from "../components/home/Cards.vue";
import FormBox from "../components/home/FormBox.vue";
import Footer from "../components/home/Footer.vue";
import {onMounted} from "vue";
import axios from "axios";

onMounted(() => {
  axios.get('http://localhost/api/categories')
    .then(response => {
      console.log(response)
    })
    .catch(error => {
      console.log(error)
    })
})

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

      <ProductsCategory class="lg:mt-16 mt-10"/>

      <Cards class="lg:mt-16 mt-10"/>
    </div>

    <FormBox class="lg:mt-16 mt-10"/>

    <Footer/>

  </div>
</template>

<style scoped>

</style>