<script setup>



</script>

<template>
  <div class="relative flex flex-row w-full">
    <!-- Text container: occupies half the width -->
    <div class="relative z-10 flex flex-col justify-center text-left w-1/2 px-6 lg:px-0 pt-11 lg:pt-16">
      <div>
        <h1 class="mb-4 font-bold text-xl md:text-5xl text-primary">
          Lorem ipsum dolor sit amet consectetur
        </h1>
        <p class="font-thin text-sm md:text-3xl text-primary">
          Lorem ipsum dolor sit amet consectetur. Semper orci adipiscing faucibus sit scelerisque quis commodo aenean viverra.
        </p>
      </div>
      <div class="flex justify-center items-center mt-2 md:mt-10">
        <img src="/images/Scroll.png" alt="Scroll" class="h-17 md:h-28">
      </div>
    </div>
    <!-- Image container: occupies half the width -->
    <div class="relative w-1/2 flex justify-end items-center">
      <picture>
        <source srcset="/images/presentation-monks-small.png" media="(max-width:768px)">
        <img
            src="/images/presentation-monks.png"
            class="lg:h-full w-auto lg:object-contain h-[400px]"
            alt="Monks"
        >
      </picture>
    </div>
  </div>
</template>

<style scoped>

</style>