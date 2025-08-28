<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

interface User {
    id: number;
    name: string;
    email: string;
}

defineProps<{ user: User }>();
</script>

<template>
    <h1>
        Hola
        <Link :href="route('hello')"> {{ user?.name }}</Link>
    </h1>
</template>
