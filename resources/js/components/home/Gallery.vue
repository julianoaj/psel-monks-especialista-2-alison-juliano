<script setup>
import {computed, ref} from "vue";

const gallery = ref([
  {
    id: 1,
    img: 'https://s3-alpha-sig.figma.com/img/9b83/8084/853c2314d7f18eccd09ea8178a906e0a?Expires=1742774400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=fV-YJIlc7IyVB0i9SZqiRVue5LKD4M-EyuEW9eg~zQTumhcTCWhKBUXz64X93at9gtLEmo5X7e2isVRdfyHMXtMtH~p4T-QY1qNzM4u262ZQn8egOAgWIebBuh42~Aiw5KBK22n91YFAt9zLE-ms0YjC-1CZk~nUu1eGYfCl1pTWda32yIlXsbXTmBwFUAGWt3jxsjELdnEsoRSuxHrzmRIU1p8FN7JPSuVyyc7CLPMMCLDqs40S1IxCU2Mh3Btxn3okkAPmKLL5XZGI~W0bKXvPPfmDjZHscZghGLBNZoRP6VhO9S4QTmgR4U3K-73DIt04PxNIG3dR2WF1PA~xzg__',
    title: 'Lorem ipsum dolor sit amet consectetur',
    description: 'Lorem ipsum dolor sit amet consectetur. Semper orci adipiscing faucibus sit scelerisque quis commodo'
  },
  {
    id: 2,
    img: 'https://s3-alpha-sig.figma.com/img/ded0/33ff/8424cea998e781cf5ff47c91e1a88f3d?Expires=1742774400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=QTBjcbTMC2nTh~q8grGGv9jx2W1vasLeEfuXZ7EiiNCdtXakwIyDCBfoSfhVXfy6VROWXXBorrt49kD5gmjV7Af6BbO0IqBzrtZJ~ftxPTnfe~C0mwsEz5BCs6c1IlMN8rNrH864eDtajqVegYmDim~6O3Y37WKZnLVOKLK~RppawVDPSZ1cWgupQXm-EnhcxPoSX72A2BkXD5MWZ4wkoOTpCJHtN1ztXP3t9~1-Ti-bytbc~q90cut7gIOhjRSu2b~ZaK03AraoysQiAs6007K8BBx3cyz7yzxN98K0a8yuPoJBjo5LaGtYm9gituNVTDGXoFhh0q2fNyvMZqqZvQ__',
    title: 'Lorem ipsum dolor sit amet consectetur 2',
    description: 'Lorem ipsum dolor sit amet consectetur. Semper orci adipiscing faucibus sit scelerisque quis commodo 2'
  },
  {
    id: 3,
    img: 'https://s3-alpha-sig.figma.com/img/f0e9/3e86/e96eef40b2d2185d88548d6a10af9b0f?Expires=1742774400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=hIYu0aZr7sUJYSBxIMUQU9QvdVQNKkAwRsyVzjOcDhfMEY90zG7ELWiunmxFR3ogu3MnPLcURP8Q~wAbzXeIndv0XoggMCqH2QXUWxWHYRiLKHShfZtoImZXDHw1VmVdrnZt6PdUQFMcI~9--odf4I07wXLZAJnBNgGNKyGODDlHVsdznQOl9eaQQVeJjYOD4QkDYFbonX6tswJVA6JDEZQ5ahYou3sTLt9bv8WX~ySN~kOvUEjVSqF-oWAnudo~2BfvlIiG-DYCGM-jy4pRjiK2kuIub1bH6ZMJGOBvKpQGhDQRw8d4M203JQeaAwg~137bItpD0yOA8LCma~jIXA__',
    title: 'Lorem ipsum dolor sit amet consectetur 3',
    description: 'Lorem ipsum dolor sit amet consectetur. Semper orci adipiscing faucibus sit scelerisque quis commodo 3'
  }
])

</script>

<template>
  <div class="grid lg:grid-flow-col md:gap-8 max-w-430 text-center lg:text-left">
    <div class="row-span-3 mb-4 lg:mb-0">
      <div class="max-w-160">
        <h1 class="text-2xl lg:text-5xl mb-4 text-black">{{ gallery[0].title }}</h1>
        <p class="lg:text-xl font-light mb-4 text-black">{{ gallery[0].description }}</p>
      </div>
      <div>
        <img :src="gallery[0].img" alt="Active image" class="rounded-3xl lg:h-162 xl:w-223 xl:h-130 object-cover cursor-pointer">
      </div>
    </div>
    <div class="col-span-2 mb-4 lg:mb-0">
      <img
          :src="gallery[1].img"
          alt="Image 2"
          class="rounded-3xl w-155 lg:h-100 xl:w-180 xl:h-84 object-cover cursor-pointer"
      >
    </div>
    <div class="col-span-2 row-span-2 mb-4 lg:mb-0">
      <img
          :src="gallery[2].img"
          alt="Image 3"
          class="rounded-3xl w-155 lg:h-100 xl:h-84 object-cover cursor-pointer xl:w-180"
      >
    </div>
  </div>
</template>

<style scoped>

</style>