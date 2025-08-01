<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <h1>Hola 2</h1>
    <Link :href="route('home')">
        <img class="inline" src="https://laravel.com/img/logotype.min.svg" alt="Laravel" />
    </Link>
</template>
