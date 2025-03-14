<script setup>

</script>

<template>
  <div class="grid xl:grid-cols-3 lg:grid-cols-2 lg:pl-12 gap-4">
    <div v-for="n in 3" class="card lg:w-96 bg-base-100 card-xl shadow-sm shadow-primary">
      <div class="card-body">
        <h2 class="card-title">Lorem ipsum dolor sit amet</h2>
        <p>Lorem ipsum dolor sit amet consectetur. Semper orci adipiscing faucibus sit scelerisque quis commodo aenean viverra.</p>
        <div class="justify-center card-actions mt-4">
          <button class="btn btn-secondary px-16">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>