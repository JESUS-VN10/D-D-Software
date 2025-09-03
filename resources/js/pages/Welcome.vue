<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <AppLayout>
        <h1>
            ¡Hola,
            <Link :href="route('hello')">Julián culo de avispas!</Link>
        </h1>
    </AppLayout>
</template>
