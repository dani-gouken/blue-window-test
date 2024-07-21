<template>
    <div class="flex items-center">
        <div class="flex items-center space-x-1 mr-2">
            <Star v-for="i in activeStarsCount" :key="`active-${i}`" :active="true" />
            <div v-if="partialStarWidth > 0" class="relative">
                <Star :active="false" />
                <div :style="{ width: `${partialStarWidth}%` }" class="overflow-hidden absolute inset-0">
                    <Star :active="true" />
                </div>
            </div>
            <Star v-for="k in inactiveStarsCount" :key="`inactive-${k}`" :active="false" />
        </div>
        <div>
            <span class="font-bold inline-block mr-1">{{ rating }}</span>
            <span class="text-gray-500">/ {{ starsCount }}</span>
        </div>
    </div>
</template>
  
<script setup>
import { computed } from "vue";
import Star from "./Star.vue";
const props = defineProps({
    rating: {
        type: Number,
        required: true,
    },
    starsCount: {
        type: Number,
        default: 5,
    },
})
const activeStarsCount = computed(() => Math.floor(props.rating))
const inactiveStarsCount = computed(() => Math.floor(props.starsCount - props.rating))
const partialStarWidth = computed(() => (props.rating - activeStarsCount.value).toFixed(2) * 100)
</script>