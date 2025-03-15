<script setup lang="ts">

import {ref} from "vue";

const cards = ref([
  {
    img: 'https://s3-alpha-sig.figma.com/img/9189/8c35/b3932b7915c0312ad651144c6c36f34a?Expires=1742774400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DOML961zhhdd-yhXDZPomVbxaI6FnmoQ8SgY7-lW9NKz7YSie7stY11-DCzC7mlgjEQg9o0kAevCLl7-i7jopQQ0ct63toY4NW4uIjzqhVmWFQN34PQ3EVqQXscFF-Bu3SQsjneYMzCs1ijeypvTxKQLotDRxWz~WqHFUETfoFi9i7cInY-oyAjeVmAMGCpzckQp3rx3kiWqtVSQhgOrxKWN6htR3dmMJbgRCuObv8bSkDwxWLKTqQXzidKZ9UAfYCntNDJitoWBUqTMnWay8prKiZ3ldh6KbpvTeHeQIHDgHxNgxrElT11ALVFKoHgraQfgdDhuVbgzuIv8R-0X~g__',
    title: 'Lorem ipsum dolor',
    description: 'Lorem ipsum dolor sit amet consectetur. Ipsum dolor consectetur'
  },
  {
    img: 'https://s3-alpha-sig.figma.com/img/7b70/8ba1/1b71df3a85f2586ce03dccc48e81f050?Expires=1742774400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=fdf2GTyD~nLVVPTjin4-e6ZtBe6fbqZ0AGtuckyfXYB8c6McuZIhR1lU-nWObNSoyUEYZJF3kb7KzvmnMJnG8j221FBP36SMDLQy3Ahz5eMYmZyL4HP1seH68wVlQEn5tknoSMHx~~T5KZnF4DYkMuKhiTUZ9qAAWXMbUW~5F91~UBimI9fkKIUM-2e58uascErxIn1oPWzoanClJN2ay4-btlcd5ISg5ytIewb9n1hpCkpP5Q8FnmFVJTbEYS9~W35rDwr8NA9ZhRMJbHimC5tH12vCsZw0RSXsg5C5PrnjPlzPje0tRWMwlmJek~Ig1xa-O5DkU7NT8OC-ds~tXA__',
    title: 'Lorem ipsum dolor',
    description: 'Lorem ipsum dolor sit amet consectetur. Ipsum dolor consectetur'
  },
  {
    img: 'https://s3-alpha-sig.figma.com/img/cb54/1716/35e6e064b7d174003e2414bf7e63b05b?Expires=1742774400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=O-BFDMXQsbXwnX8qfZv6WzGieNLRAxUzoxEl3XLE0COMk5Fi5e~mEJiPsxkuArh2djIsF75jDLY0awGWEXuAbCKyTSdpwJnc-bsKm4vrzr-7Fn4BEZRa39UA1y9w8S6PEDWtTV9C5XN6fgW9strQ3PXtM5rRYZfyG6NYYQn-DAABzlm6Pb0DXPy5ig3cwDgrzLc96pjKSTC0c40TdcBwU6A7QcBE09JOWjGltx0iom0QW3i6KhNROvXvBaq0JEKM5JiZFk0qBrdk3KOLNpjZQj8Uvw5EhudPx~X8fCNCHiiCH7YrlJWw-DKtqILG7YaGW1tQp4OHCjnt-3gPjtcI2Q__',
    title: 'Lorem ipsum dolor',
    description: 'Lorem ipsum dolor sit amet consectetur. Ipsum dolor consectetur'
  },
  {
    img: 'https://s3-alpha-sig.figma.com/img/e425/8c90/13bc0ee63edc622d669bd65993c32654?Expires=1742774400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=Gtuiun2Hjh6yp7nbolnkUBH-t6b~Q0TEYSboGAnhatsEIACkT8RSqFXfgq~Cu36HAgGWszayzuSvPQQ4NZlCY-0ifc5FYnFjzZUdNitU064lcmKDpcxmxJs188qvBoUcRYC5RQ-JZp462vPT3PCbOF6cnbDkDu87IAQVaXlSmQOgfEckbtwGZhsFxUf9Q2nWRzaeCWfVb8XsUPGZhqHaEFNdeo7at9QQHQp9BOLHP5lpqDnd2gTXo~1ETTuUPe3QOjRE6YCB~IbOEnF-q8gqcE3RZXuiungDLG5Ar5GdlrVjp2NFZ-wWNGPEtpEKz-MwxN~~ovMBKYzkSIxL11bKvQ__',
    title: 'Lorem ipsum dolor',
    description: 'Lorem ipsum dolor sit amet consectetur. Ipsum dolor consectetur'
  },
])

</script>

<template>
  <div v-bind="$attrs" class="text-center lg:text-left">
    <h2 class="lg:text-4xl text-xl mb-2 text-black">Lorem ipsum dolor sit amet, consectetur.</h2>
    <p class="lg:text-2xl font-thin text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi architecto deleniti distinctio.</p>
  </div>

  <div class="lg:mt-10 mt-4 grid xl:grid-cols-4 lg:grid-cols-3 justify-center items-center gap-4">
    <div
        v-for="card in cards"
        :key="card.title"
        class="shadow-sm p-2 md:w-75 rounded-lg bg-white"
    >
      <figure class="mb-4">
        <img
            :src="card.img"
            alt="Card Image"
            class="w-full h-48 object-cover rounded-lg"
        />
      </figure>
      <div class="text-center lg:text-left">
        <h3 class="text-xl mb-2 text-black">{{ card.title }}</h3>
        <p class="text-sm text-black">{{ card.description }}</p>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>