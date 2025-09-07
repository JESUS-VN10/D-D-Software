<script setup lang="ts">
import Hero from '@/components/Hero.vue';
import Gallery from '@/components/Gallery.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import InfoCard from '@/components/ui/InfoCard.vue';
import Card from '@/components/ui/Card.vue';

defineOptions({
    layout: AppLayout,
});
</script>

<template>
  <Hero />
    <section class="w-full">
        <div class="flex flex-col md:flex-row items-center justify-around px-6 py-12 gap-8">
        
        <InfoCard title="ENVIOS A TODO EL PAIS" description="En pedidos desde $50 mil" src="/storage/images/landing/icons/shipping.png" />

        <InfoCard title="PAGA COMO QUIERAS" description="Paga con cualquier medio de pago" src="/storage/images/landing/icons/return.png" />

        <InfoCard title="HAZ TU PRIMERA COMPRA" description="Bonos especiales como regalo" src="/storage/images/landing/icons/gift.png" />

        <InfoCard title="SERVICIO AL CLIENTE" description="Escríbenos al correo d&d_soporte@net.com" src="/storage/images/landing/icons/contact.png" />
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
    <Card name="Nombre del Producto" :originalPrice="59000" :discount="90" />
    <Card name="Nombre del Producto" :originalPrice="32000" />
    <Card name="Nombre del Producto" :originalPrice="59000" :discount="45" />
    <Card name="Nombre del Producto" :originalPrice="49000" />
  </div>
</section>

<Gallery />
</template>
