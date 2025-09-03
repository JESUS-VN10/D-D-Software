<script setup lang="ts">
import { Link, router } from '@inertiajs/vue3';
import { Search, ShoppingCart, User } from 'lucide-vue-next';

import { ref } from 'vue';

const query = ref('');

const search = () => {
    if (!query.value.trim()) {
        return;
    }

    router.get(
        // TODO: Route to search page
        '/',
        { q: query.value },
        {
            preserveState: true,
            replace: true,
        },
    );
};
</script>

<template>
    <nav class="z-10 grid h-20 w-full grid-cols-3 items-center bg-primary px-4 py-2 text-white">
        <div class="flex items-center gap-2">
            <Link :href="route('home')" class="flex items-center gap-2">
                <span class="text-2xl font-medium">D&D</span>
                <span class="text-lg font-medium"> Ropa y Calzado</span>
            </Link>
        </div>

        <div class="flex justify-center">
            <form @submit.prevent="search" class="w-full max-w-[545px] text-background">
                <div class="hidden md:flex">
                    <input
                        v-model="query"
                        type="text"
                        placeholder="Busca un producto"
                        class="z-[2] w-full rounded-l-full bg-primary-light px-4 py-2 transition duration-150 focus:ring-1 focus:ring-blue-500 focus:outline-none"
                    />
                    <button
                        type="submit"
                        class="relative z-[1] cursor-pointer rounded-r-full bg-primary-light px-4 before:absolute before:top-1/4 before:left-0 before:h-1/2 before:w-px before:bg-gray-400"
                        aria-label="Buscar productos"
                    >
                        <Search />
                    </button>
                </div>
            </form>
        </div>

        <div class="flex justify-end">
            <div class="flex gap-4 rounded-full bg-primary-light p-2 px-5">
                <User />
                <div class="border border-gray-400"></div>
                <ShoppingCart />
            </div>
        </div>
    </nav>
</template>
