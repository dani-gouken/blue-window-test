<script setup>
import { computed, onMounted, ref } from 'vue';
import Header from './components/Header.vue'
import Rating from './components/Rating.vue';

import { brands as brandsApi } from './api'

const country = window.country;
const countries = window.countries;
const currentCountry = ref(country)

const brands = ref(null)
const error = ref(false)
const loading = computed(() => brands.value == null)


const fetchBrands = () => {
    brands.value = null;
    brandsApi.top(currentCountry.value?.code).then((v) => {
        brands.value = v
        error.value = false;
    }).catch((e) => {
        console.error(e);
        error.value = true;
    })
}
const changeCountry = (country) => {
    currentCountry.value = country
    fetchBrands();
};

onMounted(fetchBrands)
</script>
<template>
    <Header />
    <div class="md:flex md:items-center max-w-7xl mb-4 px-4 mx-auto md:justify-between md:space-x-5">
        <div class="flex items-start space-x-5">
            <div class="pt-1.5">
                <h1 class="text-2xl font-bold text-gray-900 mb-2">
                    <span v-if="!currentCountry">Top list in your region</span>
                    <span v-else>Top list in {{ currentCountry.name }}</span>
                </h1>
                <p class="text-sm font-medium text-gray-500">Meilleur Casino en ligne : Comparatif du top casino -
                    Juillet 2024
                </p>
            </div>

        </div>
    </div>
    <div class="max-w-7xl mb-4 px-4 mx-auto">
        <div class="flex items-end gap-2">
            <button @click="changeCountry(country)" v-for="country in [null, ...countries]" :class="{
                'bg-green-500': currentCountry?.id == country?.id,
                'bg-gray-900': currentCountry?.id != country?.id
            }"
                class="relative grid cursor-pointer items-center px-4 py-2 font-sans text-xs font-bold text-white uppercase rounded-lg select-none whitespace-nowrap">
                <span class="">{{ country?.name ?? 'Default' }}</span>
            </button>
        </div>
    </div>
    <div v-if="loading">
        <div class="py-4">
            <div class="text-center">
                <div role="status">
                    <svg aria-hidden="true"
                        class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill" />
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>
    <div v-else-if="error">An error occured</div>
    <div v-else>
        <div class="px-4 mx-auto max-w-7xl">
            <ul role="list"
                class="divide-y divide-gray-100 overflow-hidden bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
                <li v-for="brand in brands" :key="brand.brand_id"
                    class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" :src="brand.brand_image" alt="">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                    {{ brand.brand_name }}
                                </a>
                            </p>
                            <p class="mt-1 flex text-xs leading-5 text-gray-500">
                                <Rating :rating="brand.rating" :stars-count="5" />
                            </p>
                        </div>
                    </div>
                    <div class="flex shrink-0 items-center gap-x-4">
                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>