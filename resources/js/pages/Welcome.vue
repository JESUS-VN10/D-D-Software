<script setup lang="ts">
import Hero from '@/components/Hero.vue';
import AppLayout from '@/layouts/AppLayout.vue';

import { Link } from '@inertiajs/vue3';

defineOptions({
    layout: AppLayout,
});
</script>

<template>
    <Hero />
    <div class="m-5 mx-auto max-w-[70%]">
        <h1>
            ¡Hola,
            <Link :href="route('hello')">Julián culo de avispas!</Link>
        </h1>
    </div>
</template>
