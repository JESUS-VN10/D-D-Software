<script setup lang="ts">
import { SvglPayPalLogo, SvglMercadoPagoLogo, SvglAliexpressLogo, SvglAmazonWebServicesLogo } from '@selemondev/svgl-vue';
import { Facebook, Twitter, Youtube, Instagram } from 'lucide-vue-next';
</script>

<template>
  <footer class="bg-primary text-white px-8 py-12">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10"> 
      <div>
        <h3 class="text-lg font-semibold uppercase mb-4">Información de contacto</h3>
        <ul class="space-y-2 text-sm">
          <li>Dirección: AK 41 # 34-56, Bogotá D.C</li>
          <li>Teléfono: 3228479013</li>
          <li>Fax: 55555300</li>
          <li>Email: d&d_soporte@net.co</li>
        </ul>
        <div class="flex gap-3 mt-5">
          <a href="#" class="w-8 h-8 flex items-center justify-center rounded-sm bg-blue-600">
            <Facebook /> 
          </a>
          <a href="#" class="w-8 h-8 flex items-center justify-center rounded-sm bg-sky-400">
            <Twitter />
          </a>
          <a href="#" class="w-8 h-8 flex items-center justify-center rounded-sm  bg-red-600">
            <Youtube />
          </a>
          <a href="#" class="w-8 h-8 flex items-center justify-center rounded-sm bg-gradient-to-tr from-purple-600 via-pink-500 to-yellow-400">
            <Instagram />
          </a>
        </div>
      </div>

      <div>
        <h3 class="text-lg font-semibold uppercase mb-4">Información</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:text-gray-400">Acerca de Nosotros</a></li>
          <li><a href="#" class="hover:text-gray-400">Información de productos</a></li>
          <li><a href="#" class="hover:text-gray-400">Políticas de Privacidad</a></li>
          <li><a href="#" class="hover:text-gray-400">Términos y condiciones</a></li>
          <li><a href="#" class="hover:text-gray-400">Contáctanos</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-lg font-semibold uppercase mb-4">Mi cuenta</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:text-gray-400">Mi cuenta</a></li>
          <li><a href="#" class="hover:text-gray-400">Historial de pedidos</a></li>
          <li><a href="#" class="hover:text-gray-400">Lista de deseos</a></li>
          <li><a href="#" class="hover:text-gray-400">Boletín</a></li>
          <li><a href="#" class="hover:text-gray-400">Reembolsos</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-lg font-semibold uppercase mb-4">Boletín informativo</h3>
        <p class="text-sm">Suscríbete a nuestros servicios ahora y mantente al día con nuevas colecciones y ofertas exclusivas.</p>
        <form class="mt-4">
          <input
            type="email"
            placeholder="Ingresa el correo aquí..."
            class="w-full border-b-2 border-yellow-600 bg-transparent text-sm px-2 py-2 text-gray-100 placeholder-gray-400 focus:outline-none"
          />
          <button
            type="submit"
            class="mt-4 w-auto rounded-full bg-black px-5 py-2 text-white font-bold hover:bg-gray-200 hover:text-black transition cursor-pointer"
          >
            SUSCRÍBETE
          </button>
        </form>
      </div>
    </div>

    <div class="border-t border-yellow-600 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
  <p class="text-sm text-gray-400">© Copyright 2025 D&D Ropa y Calzado</p>
  
    <div class="flex gap-4 items-center">
        <SvglPayPalLogo :height="32" :width="32" />
        <SvglMercadoPagoLogo :height="32" :width="32" />
        <SvglAliexpressLogo :height="32" :width="32" />
        <SvglAmazonWebServicesLogo :height="32" :width="32" />
    </div>
   </div>
   
  </footer>
</template>

