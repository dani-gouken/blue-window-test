<template>
    <!-- SVG from https://www.figma.com/community/file/952131925958384905 -->
    <svg class="flex-shrink-0 h-5 w-5" :class="props.active ? 'text-yellow-500' : 'text-gray-300'" viewBox="0 0 24 24"
        fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
        <path
            d="m1.327 12.4 3.56 2.6-1.352 4.187A3.178 3.178 0 0 0 4.719 22.8a3.177 3.177 0 0 0 3.8-.019l3.48-2.562 3.483 2.56a3.227 3.227 0 0 0 4.983-3.592L19.113 15l3.56-2.6a3.226 3.226 0 0 0-1.9-5.832H16.4l-1.327-4.136a3.227 3.227 0 0 0-6.146 0L7.6 6.568H3.23a3.227 3.227 0 0 0-1.9 5.832h-.003Z"
            fill="currentColor" />
    </svg>
</template>
  
<script setup>
const props = defineProps({
    active: {
        type: Boolean,
        default: false,
    },
})
</script>