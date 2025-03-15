<script setup lang="ts">
import {ref} from "vue";
import axios from "axios";

interface formCategories {
  category1: string,
  category2: string,
  category3: string,
  category4: string,
  verification: number | null
}

const emits = defineEmits(['savedCategories'])

const successSubmit = ref(false)
const errorSubmit = ref(false)

const formCategories = ref<formCategories>({
  category1: '',
  category2: '',
  category3: '',
  category4: '',
  verification: null
})

const submitForm = () => {
  axios.post('http://localhost/categories/save', formCategories.value)
    .then(response => {
      successSubmit.value = true
      emits('savedCategories', response.data.data)

      setTimeout(() => {
        successSubmit.value = false
      }, 3000)

      clearForm()
    })
    .catch(error => {
      errorSubmit.value = true

      setTimeout(() => {
        errorSubmit.value = false
      }, 3000)

      clearForm()
    })
}

const clearForm = () => {
  formCategories.value = {
    category1: '',
    category2: '',
    category3: '',
    category4: '',
    verification: null
  }
}

</script>

<template>
  <div v-bind="$attrs" class="grid xl:grid-cols-12 bg-accent lg:p-20 py-6 lg:gap-10 items-center justify-items-center">
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
              <input v-model="formCategories.category1" class="input input-lg validator" type="text" required placeholder="Categoria" minlength="4" />
              <div class="validator-hint">Categoria deve ter no mínimo 4 caracteres.</div>
            </div>
            <div>
              <input v-model="formCategories.category2" class="input input-lg validator" type="text" required placeholder="Categoria" minlength="4" />
            </div>
            <div>
              <input v-model="formCategories.category3" class="input input-lg validator" type="text" required placeholder="Categoria" minlength="4" />
            </div>
            <div>
              <input v-model="formCategories.category4" class="input input-lg validator" type="text" required placeholder="Categoria" minlength="4" />
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
            <input v-model="formCategories.verification" class="input input-lg validator lg:w-170" type="number" required placeholder="Resultado" />
            <span class="validator-hint ml-2">Resultado errado!</span>
          </div>

          <div class="justify-center card-actions">
            <button @click="submitForm" class="btn btn-secondary px-15">Salvar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex justify-center bg-accent">
    <div class="divider divider-neutral w-300"/>
  </div>

  <div class="toast">
    <div v-show="errorSubmit" class="alert alert-error">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span>Campo de verificação e categoria 1 obrigatórios.</span>
    </div>
    <div v-show="successSubmit" class="alert alert-success">
      <span>Categorias salvas com sucesso!</span>
    </div>
  </div>
</template>

<style scoped>

</style>