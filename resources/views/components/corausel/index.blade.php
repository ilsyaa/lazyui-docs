@props([
    'slides' => [],
    'autoplay' => false,
    'interval' => 5000,
])

@if (!empty($slides))
<div class="relative w-full mx-auto"
     x-data="{
        activeSlideIndex: 0, // 2. Gunakan index (0-based) bukan id
        slides: {{ json_encode($slides) }},
        autoplay: @json($autoplay),
        interval: @json($interval),
        autoplayInterval: null,


        next() {
            this.activeSlideIndex = (this.activeSlideIndex + 1) % this.slides.length;
        },
        prev() {
            // Menambahkan this.slides.length untuk memastikan hasilnya tidak pernah negatif
            this.activeSlideIndex = (this.activeSlideIndex - 1 + this.slides.length) % this.slides.length;
        },


        startAutoplay() {
            this.autoplayInterval = setInterval(() => {
                this.next();
            }, this.interval);
        },
        stopAutoplay() {
            clearInterval(this.autoplayInterval);
            this.autoplayInterval = null;
        },
        resetAutoplay() {
            this.stopAutoplay();
            if (this.autoplay) {
                this.startAutoplay();
            }
        }
     }"
     x-init="if (autoplay) { startAutoplay() }">

    <div class="relative h-56 sm:h-96 overflow-hidden rounded-lg shadow-xl">
        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="activeSlideIndex === index"
                 class="absolute inset-0"
                 x-transition:enter="transition-opacity duration-1000 ease-out" x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-1000 ease-in"
                 x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <img :src="slide.src" :alt="slide.alt" class="object-cover w-full h-full">
            </div>
        </template>
    </div>

    <button @click="prev(); resetAutoplay();"
        class="absolute top-0 left-0 z-20 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        aria-label="Slide sebelumnya">
        <span class="inline-flex items-center justify-center w-10 h-10 bg-white/30 rounded-full group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
        </span>
    </button>
    <button @click="next(); resetAutoplay();"
        class="absolute top-0 right-0 z-20 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        aria-label="Slide berikutnya">
        <span class="inline-flex items-center justify-center w-10 h-10 bg-white/30 rounded-full group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
        </span>
    </button>

    <div class="absolute z-20 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="activeSlideIndex = index; resetAutoplay();"
                :class="{ 'bg-white': activeSlideIndex === index, 'bg-white/50': activeSlideIndex !== index }"
                class="w-3 h-3 rounded-full hover:bg-white focus:outline-none transition"
                :aria-current="activeSlideIndex === index ? 'true' : 'false'"
                :aria-label="'Pindah ke slide ' + (index + 1)">
            </button>
        </template>
    </div>
</div>
@endif
