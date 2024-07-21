<script setup>
import { computed, onMounted, ref } from 'vue';
import Header from './components/Header.vue'
import Rating from './components/Rating.vue';

import { brands as brandsApi } from './api'

const brands = ref(null)
const error = ref(false)
const loading = computed(() => brands.value == null)

const fetchBrands = () => {
    brands.value = null;
    brandsApi.top().then((v) => {
        brands.value = v
        error.value = false;
    }).catch((e) => {
        console.error(e);
        error.value = true;
    })
}

onMounted(fetchBrands)
</script>
<template>
    <Header />
    <div class="md:flex md:items-center max-w-7xl mb-4 px-4 mx-auto md:justify-between md:space-x-5">
        <div class="flex items-start space-x-5">
            <div class="pt-1.5">
                <h1 class="text-2xl font-bold text-gray-900 mb-2">Top list dans votre région</h1>
                <p class="text-sm font-medium text-gray-500">Meilleur Casino en ligne : Comparatif du top casino -
                    Juillet 2024
                </p>
            </div>
        </div>
    </div>
    <div v-if="loading">Loading ...</div>
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