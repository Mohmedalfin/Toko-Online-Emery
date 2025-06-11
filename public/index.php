<?php
include 'komponen/header.php';
?>

<!-- Hero Section -->
<section class="relative w-full overflow-hidden mt-16">
    <div id="heroImageSlider" class="flex w-[100%] transition-transform duration-700 ease-in-out">
        <div class="w-full flex-shrink-0 relative text-center">
            <picture data-aos="zoom-in" data-aos-duration="1000">
                <source media="(min-width: 768px)" srcset="/asset/img/Hero1.webp" />
                <img src="/asset/img/Hero-Mobile1.webp" alt="Hero" class="mx-auto block max-w-full"
                    style="height: auto; width: auto;" />
            </picture>
        </div>
        <div class="w-full flex-shrink-0 relative text-center">
            <picture data-aos="zoom-in" data-aos-duration="1000">
                <source media="(min-width: 768px)" srcset="/asset/img/Hero3.webp" />
                <img src="/asset/img/Hero-Mobile1.webp" alt="Hero" class="mx-auto block max-w-full"
                    style="height: auto; width: auto;" />
            </picture>
        </div>
        <div class="w-full flex-shrink-0 relative text-center">
            <picture data-aos="zoom-in" data-aos-duration="1000">
                <source media="(min-width: 768px)" srcset="/asset/img/Hero2.webp" />
                <img src="/asset/img/Hero-Mobile1.webp" alt="Hero" class="mx-auto block max-w-full"
                    style="height: auto; width: auto;" />
            </picture>
        </div>
    </div>
</section>

<!-- PRODUK UNGGULAN -->
<section class="bestseller py-10 p-2">
    <div class="text-center mb-6">
        <h2 class="text-xl md:text-2xl font-medium text-primary">PRODUK UNGGULAN</h2>
        <div class="mt-2 space-x-4">
            <button onclick="filterCards('all')"
                class="text-sm md:text-base font-medium text-gray-500 hover:text-primary">ALL</button>
            <button onclick="filterCards('instan')"
                class="text-sm md:text-base font-medium text-gray-500 hover:text-primary">INSTAN</button>
            <button onclick="filterCards('pashmina')"
                class="text-sm md:text-base font-medium text-gray-500 hover:text-primary">PASHMINA</button>
            <button onclick="filterCards('bergo')"
                class="text-sm md:text-base font-medium text-gray-500 hover:text-primary">BERGO</button>
        </div>
    </div>

    <!-- Grid Produk -->
    <div id="productGrid"
        class="mx-auto grid grid-cols-2 md:grid-cols-4 gap-2 justify-center w-full max-w-screen-xl md:p-2">
        <!-- Kartu Produk -->
        <div class="product-card max-w-xs w-full rounded-xl overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
            data-category="instan" data-aos="fade-up" data-aos-delay="100">
            <!-- Gambar Produk -->
            <div class="aspect-[3/4] w-full">
                <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
            </div>

            <!-- Konten Produk -->
            <div class="p-4 space-y-1">
                <p class="font-medium text-sm md:text-lg text-font_primary">
                    Pashmina Plisket – Pink Dusty
                </p>
                <p class="text-sm md:text-xl font-medium text-font_jingga">
                    Rp. 200.000,-
                </p>
                <p class="font-medium text-font_jingga text-sm">
                    Jenis : Premium
                </p>

                <!-- Rating dan Tombol -->
                <div class="flex items-center justify-between mt-2">
                    <div class="flex items-center gap-1 text-sm text-font_primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <span>4.7</span>
                    </div>

                    <button class="text-font_jingga hover:text-rose-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Kartu Produk -->
        <div class="product-card max-w-xs w-full rounded-xl overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
            data-category="pashmina" data-aos="fade-up" data-aos-delay="100">
            <!-- Gambar Produk -->
            <div class="aspect-[3/4] w-full">
                <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
            </div>

            <!-- Konten Produk -->
            <div class="p-4 space-y-1">
                <p class="font-medium text-sm md:text-lg text-font_primary">
                    Pashmina Plisket – Pink Dusty
                </p>
                <p class="text-sm md:text-xl font-medium text-font_jingga">
                    Rp. 200.000,-
                </p>
                <p class="font-medium text-font_jingga text-sm">
                    Jenis : Premium
                </p>

                <!-- Rating dan Tombol -->
                <div class="flex items-center justify-between mt-2">
                    <div class="flex items-center gap-1 text-sm text-font_primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <span>4.7</span>
                    </div>

                    <button class="text-font_jingga hover:text-rose-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Kartu Produk -->
        <div class="product-card max-w-xs w-full rounded-xl overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
            data-category="bergo" data-aos="fade-up" data-aos-delay="100">
            <!-- Gambar Produk -->
            <div class="aspect-[3/4] w-full">
                <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
            </div>

            <!-- Konten Produk -->
            <div class="p-4 space-y-1">
                <p class="font-medium text-sm md:text-lg text-font_primary">
                    Pashmina Plisket – Pink Dusty
                </p>
                <p class="text-sm md:text-xl font-medium text-font_jingga">
                    Rp. 200.000,-
                </p>
                <p class="font-medium text-font_jingga text-sm">
                    Jenis : Premium
                </p>

                <!-- Rating dan Tombol -->
                <div class="flex items-center justify-between mt-2">
                    <div class="flex items-center gap-1 text-sm text-font_primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <span>4.7</span>
                    </div>

                    <button class="text-font_jingga hover:text-rose-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Kartu Produk -->
        <div class="product-card max-w-xs w-full rounded-xl overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
            data-category="pashmina" data-aos="fade-up" data-aos-delay="100">
            <!-- Gambar Produk -->
            <div class="aspect-[3/4] w-full">
                <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
            </div>

            <!-- Konten Produk -->
            <div class="p-4 space-y-1">
                <p class="font-medium text-sm md:text-lg text-font_primary">
                    Pashmina Plisket – Pink Dusty
                </p>
                <p class="text-sm md:text-xl font-medium text-font_jingga">
                    Rp. 200.000,-
                </p>
                <p class="font-medium text-font_jingga text-sm">
                    Jenis : Premium
                </p>

                <!-- Rating dan Tombol -->
                <div class="flex items-center justify-between mt-2">
                    <div class="flex items-center gap-1 text-sm text-font_primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <span>4.7</span>
                    </div>

                    <button class="text-font_jingga hover:text-rose-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol tampilkan semua -->
    <div class="text-center mt-6">
        <a href="category_produk.php"
            class="px-6 py-2 bg-primary text-white rounded-xl font-medium transition inline-block">
            Tampilkan semua
        </a>
    </div>
</section>

<!-- PRODUK KE-1 -->
<section class="relative w-full overflow-hidden">
    <div class="flex w-[100%] transition-transform duration-700 ease-in-out">
        <div class="w-full flex-shrink-0 relative text-center">
            <picture data-aos="zoom-in" data-aos-duration="1000">
                <source media="(min-width: 768px)" srcset="/asset/img/Hero1.webp" />
                <img src="/asset/img/Hero-Mobile1.webp" alt="Hero" class="mx-auto block max-w-full"
                    style="height: auto; width: auto;" />
            </picture>
        </div>
    </div>

    <div class="py-10 p-2">
        <!-- Grid Produk -->
        <div id="productGrid"
            class="mx-auto grid grid-cols-2 md:grid-cols-4 gap-2 justify-center w-full max-w-screen-xl md:p-2">
            <!-- Kartu Produk -->
            <div class="product-card max-w-xs w-full rounded-xl overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
                data-aos="fade-up" data-aos-delay="100">
                <!-- Gambar Produk -->
                <div class="aspect-[3/4] w-full">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
                </div>

                <!-- Konten Produk -->
                <div class="p-4 space-y-1">
                    <p class="font-medium text-sm md:text-lg text-font_primary">
                        Pashmina Plisket – Pink Dusty
                    </p>
                    <p class="text-sm md:text-xl font-medium text-font_jingga">
                        Rp. 200.000,-
                    </p>
                    <p class="font-medium text-font_jingga text-sm">
                        Jenis : Premium
                    </p>

                    <!-- Rating dan Tombol -->
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center gap-1 text-sm text-font_primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <span>4.7</span>
                        </div>

                        <button class="text-font_jingga hover:text-rose-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kartu Produk -->
            <div class="product-card max-w-xs w-full rounded-xl overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
                data-aos="fade-up" data-aos-delay="100">
                <!-- Gambar Produk -->
                <div class="aspect-[3/4] w-full">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
                </div>

                <!-- Konten Produk -->
                <div class="p-4 space-y-1">
                    <p class="font-medium text-sm md:text-lg text-font_primary">
                        Pashmina Plisket – Pink Dusty
                    </p>
                    <p class="text-sm md:text-xl font-medium text-font_jingga">
                        Rp. 200.000,-
                    </p>
                    <p class="font-medium text-font_jingga text-sm">
                        Jenis : Premium
                    </p>

                    <!-- Rating dan Tombol -->
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center gap-1 text-sm text-font_primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <span>4.7</span>
                        </div>

                        <button class="text-font_jingga hover:text-rose-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kartu Produk -->
            <div class="product-card max-w-xs w-full rounded-xl overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
                data-aos="fade-up" data-aos-delay="100">
                <!-- Gambar Produk -->
                <div class="aspect-[3/4] w-full">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
                </div>

                <!-- Konten Produk -->
                <div class="p-4 space-y-1">
                    <p class="font-medium text-sm md:text-lg text-font_primary">
                        Pashmina Plisket – Pink Dusty
                    </p>
                    <p class="text-sm md:text-xl font-medium text-font_jingga">
                        Rp. 200.000,-
                    </p>
                    <p class="font-medium text-font_jingga text-sm">
                        Jenis : Premium
                    </p>

                    <!-- Rating dan Tombol -->
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center gap-1 text-sm text-font_primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <span>4.7</span>
                        </div>

                        <button class="text-font_jingga hover:text-rose-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kartu Produk -->
            <div class="product-card max-w-xs w-full rounded-xl overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
                data-aos="fade-up" data-aos-delay="100">
                <!-- Gambar Produk -->
                <div class="aspect-[3/4] w-full">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
                </div>

                <!-- Konten Produk -->
                <div class="p-4 space-y-1">
                    <p class="font-medium text-sm md:text-lg text-font_primary">
                        Pashmina Plisket – Pink Dusty
                    </p>
                    <p class="text-sm md:text-xl font-medium text-font_jingga">
                        Rp. 200.000,-
                    </p>
                    <p class="font-medium text-font_jingga text-sm">
                        Jenis : Premium
                    </p>

                    <!-- Rating dan Tombol -->
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center gap-1 text-sm text-font_primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <span>4.7</span>
                        </div>

                        <button class="text-font_jingga hover:text-rose-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-6">
            <button href="kategori/category_produk.html"
                class="px-6 py-2 bg-primary text-white rounded-xl font-medium transition">
                Tampilkan semua
            </button>
        </div>
    </div>
</section>
<!-- END PRODUK KE 1 -->

<!-- CATEGORY -->
<section class="mb-6">
    <div class="relative bg-white">
        <!-- Background image and overlap -->
        <div aria-hidden="true" class="absolute inset-0 hidden sm:flex sm:flex-col">
            <div class="relative w-full flex-1 bg-gray-800">
                <div class="absolute inset-0 overflow-hidden">
                    <img src="/asset/img/Hero1.webp" alt="" class="h-full w-full object-cover object-center">
                </div>
                <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
            </div>
            <div class="h-32 w-full bg-white md:h-40 lg:h-48"></div>
        </div>

        <div class="relative mx-auto max-w-3xl px-4 pb-96 text-center sm:px-6 sm:pb-0 lg:px-8">
            <!-- Background image and overlap -->
            <div aria-hidden="true" class="absolute inset-0 flex flex-col sm:hidden">
                <div class="relative w-full flex-1 bg-gray-800">
                    <div class="absolute inset-0 overflow-hidden">
                        <img src="/asset/img/Hero1.webp" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
                </div>
                <div class="h-48 w-full bg-white"></div>
            </div>
            <div class="relative py-32">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">Mid-Season Sale</h1>
                <div class="mt-4 sm:mt-6">
                    <a href="#"
                        class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 font-medium text-white hover:bg-indigo-700">Shop
                        Collection</a>
                </div>
            </div>
        </div>

        <section aria-labelledby="collection-heading" class="relative -mt-96 sm:mt-0">
            <h2 id="collection-heading" class="sr-only">Collections</h2>
            <div
                class="mx-auto grid max-w-md grid-cols-1 gap-y-6 px-4 sm:max-w-7xl sm:grid-cols-3 sm:gap-x-6 sm:gap-y-0 sm:px-6 lg:gap-x-8 lg:px-8">
                <div class="group relative h-96 rounded-lg bg-white shadow-xl sm:aspect-h-5 sm:aspect-w-4 sm:h-auto">
                    <div>
                        <div aria-hidden="true" class="absolute inset-0 overflow-hidden rounded-lg">
                            <div class="absolute inset-0 overflow-hidden group-hover:opacity-75">
                                <img src="../asset/img/H1.jpg" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                        </div>
                        <div class="absolute inset-0 flex items-end rounded-lg p-6">
                            <div>
                                <p aria-hidden="true" class="text-sm text-white">Shop the collection</p>
                                <h3 class="mt-1 font-semibold text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Women&#039;s
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group relative h-96 rounded-lg bg-white shadow-xl sm:aspect-h-5 sm:aspect-w-4 sm:h-auto">
                    <div>
                        <div aria-hidden="true" class="absolute inset-0 overflow-hidden rounded-lg">
                            <div class="absolute inset-0 overflow-hidden group-hover:opacity-75">
                                <img src="../asset/img/H1.jpg" alt="Man wearing a charcoal gray cotton t-shirt."
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                        </div>
                        <div class="absolute inset-0 flex items-end rounded-lg p-6">
                            <div>
                                <p aria-hidden="true" class="text-sm text-white">Shop the collection</p>
                                <h3 class="mt-1 font-semibold text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Men&#039;s
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group relative h-96 rounded-lg bg-white shadow-xl sm:aspect-h-5 sm:aspect-w-4 sm:h-auto">
                    <div>
                        <div aria-hidden="true" class="absolute inset-0 overflow-hidden rounded-lg">
                            <div class="absolute inset-0 overflow-hidden group-hover:opacity-75">
                                <img src="../asset/img/H1.jpg"
                                    alt="Person sitting at a wooden desk with paper note organizer, pencil and tablet."
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                        </div>
                        <div class="absolute inset-0 flex items-end rounded-lg p-6">
                            <div>
                                <p aria-hidden="true" class="text-sm text-white">Shop the collection</p>
                                <h3 class="mt-1 font-semibold text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Desk Accessories
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- END CATEGORI -->


<!-- END CATEGORI PRODUK -->
<?php
include 'komponen/footer.php';
?>