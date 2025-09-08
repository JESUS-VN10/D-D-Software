<script setup lang="ts"></script>

<template>
    <section class="hero relative flex h-[650px] w-full items-center justify-center overflow-hidden">
        <div class="relative z-2 m-5 flex w-full flex-col gap-y-3 text-white md:m-0 md:w-1/2">
            <p class="w-max bg-red-500 px-1 py-0.5 text-xs font-semibold text-background">¡Nuevas prendas!</p>
            <h2 class="text-4xl font-bold">
                Accede a varios estilos <br />
                Nuevas Prendas y calzado a grandes precios
            </h2>
            <a
                href="#"
                class="w-max rounded-full bg-primary px-5 py-2 text-xs font-semibold uppercase transition-colors hover:bg-background hover:text-primary"
                >Comprar ahora</a
            >
        </div>
    </section>
</template>

<style scoped>
.hero::before {
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2)), url('/storage/images/landing/hero/2.webp');
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    z-index: 0;
}
</style>
