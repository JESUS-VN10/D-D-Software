<script setup lang="ts">
import { ref } from "vue";
import { TextSearch, MessageSquareShare } from 'lucide-vue-next';

const reviews = ref([
  {
    title: "¡Increíble experiencia de compra!",
    date: "12 agosto 2025",
    content:
      "El proceso fue muy rápido y sencillo. Recibí mi pedido en menos de 3 días y la calidad superó mis expectativas.",
    image: "/storage/images/resource/review1.webp",
  },
  {
    title: "Excelente atención al cliente",
    date: "25 agosto 2025",
    content:
      "Tuve una duda sobre tallas y me respondieron en minutos. La prenda quedó perfecta, ¡gracias!",
    image: "/storage/images/resource/review2.webp",
  },
  {
    title: "Productos de gran calidad",
    date: "2 septiembre 2025",
    content:
      "La tela y los acabados son de primera. Definitivamente volveré a comprar, ya recomendé la tienda a mis amigos.",
    image: "/storage/images/resource/review3.webp",
  },
]);
</script>


<template>
  <section class="max-w-7xl mx-auto mt-12 px-6 flex flex-col gap-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-8">Reseñas</h1>

    <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
      <div
        v-for="(review, index) in reviews"
        :key="index"
        class="flex flex-col h-full">
        <div class="relative overflow-hidden rounded-xl cursor-pointer group">
          <img
            :src="review.image"
            :alt="review.title"
            loading="lazy"
            class="w-full h-64 object-cover rounded-xl"/>

          <div
            class="absolute bottom-4 right-[-2.5rem] flex gap-2 opacity-0 group-hover:opacity-100 group-hover:right-4 transition-all duration-300">
            <span
              class="bg-white p-2.5 rounded-full shadow-md hover:bg-yellow-600 hover:text-white transition flex items-center justify-center">
              <TextSearch class="w-4.5 h-4.5" />
            </span>
            <span
              class="bg-white p-2.5 rounded-full shadow-md hover:bg-yellow-600 hover:text-white transition flex items-center justify-center">
              <MessageSquareShare class="w-4.5 h-4.5" />
            </span>
          </div>
        </div>

        <div class="flex flex-col flex-1 mt-4">
          <h3
            class="text-xl font-medium text-gray-800 mb-3 hover:text-yellow-600 cursor-pointer">
            {{ review.title }}
          </h3>
          <span class="text-sm text-yellow-600 mb-2">{{ review.date }}</span>
          <p class="text-gray-600 text-base mb-4">
            {{ review.content }}
          </p>
          <button
            class="mt-auto self-start bg-gray-900 text-white text-xs font-bold uppercase py-2 px-6 rounded-full hover:bg-yellow-600 transition cursor-pointer">
            Leer más
          </button>
        </div>
      </div>
    </div>
  </section>
</template>

