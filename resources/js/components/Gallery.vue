<script setup lang="ts"></script>

<template> 

    <section class="my-12">
  <div class="flex flex-col md:flex-row">
    <div class="flex-1">
      <img
        src="/storage/images/landing/resources/Gallery1.webp"
        alt="Galería 1"
        class="w-full h-[400px] md:h-[700px] object-cover"
        loading="lazy"
      />
    </div>

    <div
      class="flex-1 bg-black text-white flex flex-col items-center justify-center text-center p-8"
    >
      <h3 class="text-lg font-medium mb-2">
        Grandes precios en diferentes productos
      </h3>
      <h1 class="text-4xl font-bold">New Season</h1>
      <h1 class="text-4xl font-bold mb-6">Nueva Colección</h1>

      <a href="#nav">
        <button
          class="px-6 py-3 bg-white text-black font-semibold rounded-md hover:bg-yellow-600 hover:text-white transition"
        >
          ELIGE TU ESTILO
        </button>
      </a>
    </div>

    <div class="flex-1">
      <img
        src="/storage/images/landing/resources/Gallery2.webp"
        alt="Galería 2"
        class="w-full h-[400px] md:h-[700px] object-cover"
        loading="lazy"
      />
    </div>
  </div>
</section>

</template>