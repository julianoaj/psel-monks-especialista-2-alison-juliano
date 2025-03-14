<script setup>

import {onMounted, ref} from "vue";

onMounted(() => {
  setInterval(() => {
    activeBody.value = activeBody.value === 0 ? 1 : 0;
  }, 8000);
});

const activeBody = ref(0)

const bodies = ref([
    {
        title: 'Lorem ipsum dolor sit amet consectetur 1',
        description: 'Lorem ipsum dolor sit amet consectetur. Semper orci adipiscing faucibus sit scelerisque quis commodo aenean viverra. 1',
    },
    {
        title: 'Lorem ipsum dolor sit amet consectetur 2',
        description: 'Lorem ipsum dolor sit amet consectetur. Semper orci adipiscing faucibus sit scelerisque quis commodo aenean viverra. 2',
    },
])

</script>

<template>
  <div class="relative flex flex-row w-full">
    <!-- Text container: occupies half the width -->
    <div class="relative z-10 flex flex-col justify-center text-left w-1/2 px-6 lg:px-0 pt-11 lg:pt-20">
      <transition
          mode="out-in"
          enter-active-class="animate-in fade-in duration-900"
          leave-active-class="animate-out fade-out duration-900">
        <div :key="activeBody">
          <h1 class="mb-4 font-bold text-xl md:text-5xl text-primary">
            {{ bodies[activeBody].title }}
          </h1>
          <p class="font-thin text-sm md:text-3xl text-primary">
            {{ bodies[activeBody].description }}
          </p>
        </div>
      </transition>
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