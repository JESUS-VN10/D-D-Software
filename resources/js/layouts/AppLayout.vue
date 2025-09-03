<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import Navbar from '@/components/Navbar.vue';
</script>

<template>
    <Navbar />
    <main>
        <slot />
    </main>
    <Footer />
</template>
