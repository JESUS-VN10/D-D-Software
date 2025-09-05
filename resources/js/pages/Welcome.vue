<script setup lang="ts">
import Hero from '@/components/Hero.vue';
import Hero2 from '@/components/Hero2.vue';
import { ShoppingCart, Heart, Share2 } from 'lucide-vue-next';
import AppLayout from '@/layouts/AppLayout.vue';

// import { Link } from '@inertiajs/vue3';

defineOptions({
    layout: AppLayout,
});
</script>

<template>
  <Hero />
    <section class="w-full">
        <div class="flex flex-col md:flex-row items-center justify-around px-6 py-12 gap-8">
        
        <!-- Envíos -->
        <div class="flex flex-col items-center text-center">
            <img src="/storage/images/resource/shipping.png" alt="Envíos" class="w-12 h-12" />
            <span class="text-base font-semibold my-5">ENVIOS A TODO EL PAIS</span>
            <span class="text-gray-500 text-base max-w-[200px]">En pedidos desde $50 mil</span>
        </div>

        <!-- Pagos -->
        <div class="flex flex-col items-center text-center">
            <img src="/storage/images/resource/return.png" alt="Pagos" class="w-12 h-12" />
            <span class="text-base font-semibold my-5">PAGA COMO QUIERAS</span>
            <span class="text-gray-500 text-base max-w-[200px]">Paga con cualquier medio de pago</span>
        </div>

        <!-- Bonos -->
        <div class="flex flex-col items-center text-center">
            <img src="/storage/images/resource/gift.png" alt="Bonos" class="w-12 h-12" />
            <span class="text-base font-semibold my-5">HAZ TU PRIMERA COMPRA</span>
            <span class="text-gray-500 text-base max-w-[200px]">Bonos especiales como regalo</span>
        </div>

        <!-- Soporte -->
        <div class="flex flex-col items-center text-center">
            <img src="/storage/images/resource/contact.png" alt="Soporte" class="w-12 h-12" />
            <span class="text-base font-semibold my-5">SERVICIO AL CLIENTE</span>
            <span class="text-gray-500 text-base max-w-[200px]">Escríbenos al correo d&d_soporte@net.com</span>
        </div>
       </div>
    </section>

  <section class="flex flex-col gap-8 mb-12 mt-12">
    <h1 class="text-2xl text-center font-bold tracking-tight text-gray-900">
      Mejores Productos
    </h1>

    <div class="flex justify-center gap-6 mb-8">
      <span
        class="px-6 py-2 text-sm rounded-full cursor-pointer bg-yellow-600 text-white font-medium"
      >
        Destacados
      </span>
      <span
        class="px-6 py-2 text-sm rounded-full cursor-pointer text-gray-500 hover:bg-yellow-600 hover:text-white transition"
      >
        Más recientes
      </span>
      <span
        class="px-6 py-2 text-sm rounded-full cursor-pointer text-gray-500 hover:bg-yellow-600 hover:text-white transition"
      >
        Más prendas
      </span>
    </div>
  </section>

 <section class="px-6">
  <div
    class="mx-auto max-w-7xl grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    <!-- Card producto 1 -->
    <div
      class="group bg-white rounded-md shadow-sm p-5 hover:shadow-md transition cursor-pointer">
      <div class="relative">
        <img
          src="/storage/images/resource/product.webp"
          alt="Producto"
          class="w-full aspect-square object-cover rounded-md"/>

        <span
          class="absolute top-2 left-2 bg-yellow-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
          20%
        </span>

        <div
          class="absolute top-2 right-2 flex flex-col gap-2 opacity-0 translate-x-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-x-0">
          <button
            class="p-2 border border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition">
            <Heart class="w-4 h-4" />
          </button>
          <button
            class="p-2 border border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition">
            <Share2 class="w-4 h-4" />
          </button>
        </div>
      </div>

      <div class="mt-4 grid grid-cols-2 items-center">
        <h3
          class="col-span-2 text-center text-base font-medium text-gray-700 hover:text-yellow-600 cursor-pointer mb-2">
          Nombre del Producto
        </h3>

        <button
          class="px-5 p-2 border-2 border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition justify-self-start">
          <ShoppingCart class="w-4 h-4" />
        </button>

        <p class="justify-self-end text-sm font-semibold text-gray-900">
          $49.000
          <span class="block text-xs font-normal line-through text-gray-400">
            $59.000
          </span>
        </p>
      </div>
    </div>

  <!-- Card producto 2 -->
    <div
      class="group bg-white rounded-md shadow-sm p-5 hover:shadow-md transition cursor-pointer">
      <div class="relative">
        <img
          src="/storage/images/resource/product.webp"
          alt="Producto"
          class="w-full aspect-square object-cover rounded-md"/>

        <span
          class="absolute top-2 left-2 bg-yellow-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
          20%
        </span>

        <div
          class="absolute top-2 right-2 flex flex-col gap-2 opacity-0 translate-x-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-x-0">
          <button
            class="p-2 border border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition">
            <Heart class="w-4 h-4" />
          </button>
          <button
            class="p-2 border border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition">
            <Share2 class="w-4 h-4" />
          </button>
        </div>
      </div>

      <div class="mt-4 grid grid-cols-2 items-center">
        <h3
          class="col-span-2 text-center text-base font-medium text-gray-700 hover:text-yellow-600 cursor-pointer mb-2">
          Nombre del Producto
        </h3>

        <button
          class="px-5 p-2 border-2 border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition justify-self-start">
          <ShoppingCart class="w-4 h-4" />
        </button>

        <p class="justify-self-end text-sm font-semibold text-gray-900">
          $49.000
          <span class="block text-xs font-normal line-through text-gray-400">
            $59.000
          </span>
        </p>
      </div>
    </div>

    <!-- Card producto 3 -->
    <div
      class="group bg-white rounded-md shadow-sm p-5 hover:shadow-md transition cursor-pointer">
      <div class="relative">
        <img
          src="/storage/images/resource/product.webp"
          alt="Producto"
          class="w-full aspect-square object-cover rounded-md"/>

        <span
          class="absolute top-2 left-2 bg-yellow-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
          20%
        </span>

        <div
          class="absolute top-2 right-2 flex flex-col gap-2 opacity-0 translate-x-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-x-0">
          <button
            class="p-2 border border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition">
            <Heart class="w-4 h-4" />
          </button>
          <button
            class="p-2 border border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition">
            <Share2 class="w-4 h-4" />
          </button>
        </div>
      </div>

      <div class="mt-4 grid grid-cols-2 items-center">
        <h3
          class="col-span-2 text-center text-base font-medium text-gray-700 hover:text-yellow-600 cursor-pointer mb-2">
          Nombre del Producto
        </h3>

        <button
          class="px-5 p-2 border-2 border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition justify-self-start">
          <ShoppingCart class="w-4 h-4" />
        </button>

        <p class="justify-self-end text-sm font-semibold text-gray-900">
          $49.000
          <span class="block text-xs font-normal line-through text-gray-400">
            $59.000
          </span>
        </p>
      </div>
    </div>

    <!-- Card producto 4 -->
    <div
      class="group bg-white rounded-md shadow-sm p-5 hover:shadow-md transition cursor-pointer">
      <div class="relative">
        <img
          src="/storage/images/resource/product.webp"
          alt="Producto"
          class="w-full aspect-square object-cover rounded-md"/>

        <span
          class="absolute top-2 left-2 bg-yellow-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
          20%
        </span>

        <div
          class="absolute top-2 right-2 flex flex-col gap-2 opacity-0 translate-x-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-x-0">
          <button
            class="p-2 border border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition">
            <Heart class="w-4 h-4" />
          </button>
          <button
            class="p-2 border border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition">
            <Share2 class="w-4 h-4" />
          </button>
        </div>
      </div>

      <div class="mt-4 grid grid-cols-2 items-center">
        <h3
          class="col-span-2 text-center text-base font-medium text-gray-700 hover:text-yellow-600 cursor-pointer mb-2">
          Nombre del Producto
        </h3>

        <button
          class="px-5 p-2 border-2 border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition justify-self-start">
          <ShoppingCart class="w-4 h-4" />
        </button>

        <p class="justify-self-end text-sm font-semibold text-gray-900">
          $49.000
          <span class="block text-xs font-normal line-through text-gray-400">
            $59.000
          </span>
        </p>
      </div>
    </div>

  </div>
</section>

<Hero2 />


</template>
