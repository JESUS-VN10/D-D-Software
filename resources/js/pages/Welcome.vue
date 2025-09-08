<script setup lang="ts">
import Hero from '@/components/Hero.vue';
import Gallery from '@/components/Gallery.vue';
import ProductCard from '@/components/ProductCard.vue';
import Reviews from "@/components/Reviews.vue";
import { ref } from 'vue';
import AppLayout from '@/layouts/AppLayout.vue';

defineOptions({
  layout: AppLayout,
});

const products = ref([
  {
    id: 1,
    title: 'Nombre del Producto',
    image: '/storage/images/resource/product.webp',
    price: '$49.000',
    oldPrice: '$59.000',
    discount: 20,
  },
]);

function markAsFavorite(payload: any) {
  console.log('Favorito:', payload);
}

function shareProduct(payload: any) {
  console.log('Compartir:', payload);
}

function addToCart(payload: any) {
  console.log('Agregar al carrito:', payload);
}
</script>


<template>
  <Hero />
    <section class="w-full">
        <div class="flex flex-col md:flex-row items-center justify-around px-6 py-12 gap-8">
        
        <!-- Envíos -->
        <div class="flex flex-col items-center text-center">
            <img src="/storage/images/resource/shipping.png" alt="Envíos" class="w-11 h-11" />
            <span class="text-base font-semibold my-5">ENVIOS A TODO EL PAIS</span>
            <span class="text-gray-500 text-base max-w-[200px]">En pedidos desde $50 mil en adelante</span>
        </div>

        <!-- Pagos -->
        <div class="flex flex-col items-center text-center">
            <img src="/storage/images/resource/return.png" alt="Pagos" class="w-11 h-11" />
            <span class="text-base font-semibold my-5">PAGA COMO QUIERAS</span>
            <span class="text-gray-500 text-base max-w-[200px]">Paga con cualquier medio de pago</span>
        </div>

        <!-- Bonos -->
        <div class="flex flex-col items-center text-center">
            <img src="/storage/images/resource/gift.png" alt="Bonos" class="w-11 h-11" />
            <span class="text-base font-semibold my-5">HAZ TU PRIMERA COMPRA</span>
            <span class="text-gray-500 text-base max-w-[200px]">Bonos especiales como regalo</span>
        </div>

        <!-- Soporte -->
        <div class="flex flex-col items-center text-center">
            <img src="/storage/images/resource/contact.png" alt="Soporte" class="w-11 h-11" />
            <span class="text-base font-semibold my-5">SERVICIO AL CLIENTE</span>
            <span class="text-gray-500 text-base max-w-[200px]">Escríbenos a nuestro chat de WhatsApp</span>
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
  <div class="mx-auto max-w-7xl grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    <ProductCard
      v-for="product in products"
      :key="product.id"
      :image="product.image"
      :title="product.title"
      :price="product.price"
      :oldPrice="product.oldPrice"
      :discount="product.discount"
      @favorite="markAsFavorite"
      @share="shareProduct"
      @add-to-cart="addToCart"
    />
  </div>
</section>

<Gallery />

<section class="px-6">
  <div class="mx-auto max-w-7xl grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    <ProductCard
      v-for="product in products"
      :key="product.id"
      :image="product.image"
      :title="product.title"
      :price="product.price"
      :oldPrice="product.oldPrice"
      :discount="product.discount"
      @favorite="markAsFavorite"
      @share="shareProduct"
      @add-to-cart="addToCart"
    />
  </div>
</section>

<Reviews />

</template>
