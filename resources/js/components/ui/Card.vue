<script setup lang="ts">
import { ShoppingCart, Heart, Share2 } from 'lucide-vue-next'


const props = defineProps<{
  name: string
  originalPrice: number
  discount?: number
}>()

const finalPrice = props.discount
  ? props.originalPrice * (1 - props.discount / 100)
  : props.originalPrice
</script>

<template>
  <div
    class="group bg-white rounded-md shadow-sm p-5 hover:shadow-md transition cursor-pointer"
  >
    <div class="relative">
      <img
        src="/storage/images/landing/resources/product.webp"
        alt="Producto"
        class="w-full aspect-square object-cover rounded-md"
      />

      <span
        v-if="discount"
        class="absolute top-2 left-2 bg-yellow-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
        {{ discount }}%
      </span>


      <div
        class="absolute top-2 right-2 flex flex-col gap-2 opacity-0 translate-x-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-x-0"
      >
        <button
          class="p-2 border border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition"
        >
          <Heart class="w-4 h-4" />
        </button>
        <button
          class="p-2 border border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition"
        >
          <Share2 class="w-4 h-4" />
        </button>
      </div>
    </div>

    <div class="mt-4 grid grid-cols-2 items-center">
      <h3
        class="col-span-2 text-center text-base font-medium text-gray-700 hover:text-yellow-600 cursor-pointer mb-2"
      >
        {{ name }}
      </h3>

      <button
        class="p-2.5 border-2 border-yellow-600 rounded-full hover:bg-yellow-600 hover:text-white transition justify-self-start"
      >
        <ShoppingCart class="w-4 h-4" />
      </button>

      <p class="justify-self-end text-sm font-semibold text-gray-900">
        ${{ finalPrice.toLocaleString('es-CO') }}
        <span v-if="discount" class="block text-xs font-normal line-through text-gray-400">
          ${{ originalPrice.toLocaleString('es-CO') }}
        </span>
      </p>
    </div>
  </div>
</template>
