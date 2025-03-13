<script setup>
import HeaderHome from "../components/home/header/HeaderHome.vue";
import HeaderPresentation from "../components/home/HeaderPresentation.vue";
</script>

<template>
  <div class="bg-white">
    <HeaderHome/>

    <div class="lg:h-[480px] h-[400px] flex items-center lg:rounded-bl-3xl lg:rounded-br-3xl w-screen lg:p-15 bg-[#2D2D2D]">
      <HeaderPresentation/>
    </div>
  </div>
</template>

<style scoped>

</style>