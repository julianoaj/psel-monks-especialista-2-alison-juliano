<script setup>

</script>

<template>
  <div class="grid xl:grid-cols-12 bg-accent lg:p-20 py-6 lg:gap-10 items-center justify-items-center">
    <div class="xl:col-span-4 col-span-12 mt-8 lg:mt-0 mb-10 lg:mb-0">
      <img src="/images/form-box-image.png" alt="computer" class="h-full w-70 lg:w-full">
    </div>
    <div class="xl:col-span-8 col-span-12">
      <div class="card lg:w-200 w-80 bg-[#EAE8E4] shadow-sm">
        <div class="card-body">
          <div>
            <h2 class="card-title lg:text-3xl text-xl">Lorem ipsum dolor sit amet consectetur</h2>
            <p class="text-lg font-thin">Lorem ipsum dolor sit amet consectetur. Semper orci adipiscing faucibus sit scelerisque</p>
            <p>*Lorem ipsum dolor sit amet consectetur</p>
          </div>
          <div class="grid lg:grid-cols-2">
            <div>
              <input class="input input-lg validator" type="email" required placeholder="Categoria" minlength="8" />
              <div class="validator-hint">Enter valid email address</div>
            </div>
            <div>
              <input class="input input-lg validator" type="email" required placeholder="Categoria" minlength="8" />
              <div class="validator-hint">Enter valid email address</div>
            </div>
            <div>
              <input class="input input-lg validator" type="email" required placeholder="Categoria" minlength="8" />
              <div class="validator-hint">Enter valid email address</div>
            </div>
            <div>
              <input class="input input-lg validator" type="email" required placeholder="Categoria" minlength="8" />
              <div class="validator-hint">Enter valid email address</div>
            </div>
          </div>

          <div class="lg:flex grid items-center">
            <div>
              <span class="mr-2 lg:whitespace-nowrap text-2xl">Verificacao de seguranca</span>
            </div>

            <div class="lg:px-4 lg:p-2 p-2 bg-[#dfdcd5] lg:ml-2 flex gap-2 lg:text-xl text-center justify-center">
              <span class="font-bold text-[#7D26C9]">427</span>
              <span class="font-bold text-[#7D26C9]">+</span>
              <span class="font-bold text-[#7D26C9]">427</span>
            </div>

            <span class="mx-4 text-xl text-center">=</span>
            <input class="input input-lg validator lg:w-170" type="email" required placeholder="Resultado" minlength="8" />
            <span class="validator-hint ml-2">Enter valid email address</span>
          </div>

          <div class="justify-center card-actions">
            <button class="btn btn-secondary px-15">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex justify-center bg-accent">
    <div class="divider divider-neutral w-300"/>
  </div>
</template>

<style scoped>

</style>