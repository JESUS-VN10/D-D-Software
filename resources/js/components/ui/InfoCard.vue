<script setup lang="ts">
defineProps<{
    description: string;
    src: string;
    title: string;
}>()
</script>
<template>
        <div class="flex flex-col items-center text-center">
            <img :src="src" alt="Envíos" class="w-12 h-12" />
            <span class="text-base font-semibold my-5">{{ title }}</span>
            <span class="text-gray-500 text-sm max-w-[200px]">{{ description }}</span>
        </div>
</template>