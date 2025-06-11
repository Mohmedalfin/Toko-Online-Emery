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

<!-- CATEGORI PRODUK -->
<section class="relative w-full overflow-hidden  bg-tertiary">
    <div class="flex w-[100%] transition-transform duration-700 ease-in-out">
        <div class="w-full flex-shrink-0 relative text-center">
            <h2 class="text-2xl md:text-3xl font-medium text-primary mt-10 duration-300" data-aos="fade-up"
                data-aos-delay="100" data-aos-once="false">Category Jilbab</h2>
        </div>
    </div>

    <div class="py-4 p-2">
        <!-- Grid Produk -->
        <div id="productGrid"
            class="mx-auto grid grid-cols-2 md:grid-cols-4 gap-2 justify-center w-full max-w-screen-xl md:p-2 mb-10">
            <!-- Kartu Category -->
            <div class="product-card max-w-xs w-full overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
                data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
                <div class="aspect-[1/1] w-full overflow-hidden content-over-media">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket"
                        class="zoom-image w-full h-full object-cover transition duration-300 ease-in-out transform hover:scale-110" />
                </div>
            </div>
            <!-- Kartu Category -->
            <div class="product-card max-w-xs w-full overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
                data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
                <div class="aspect-[1/1] w-full overflow-hidden content-over-media">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket"
                        class="zoom-image w-full h-full object-cover transition duration-300 ease-in-out transform hover:scale-110" />
                </div>
            </div>
            <!-- Kartu Category -->
            <div class="product-card max-w-xs w-full overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
                data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
                <div class="aspect-[1/1] w-full overflow-hidden content-over-media">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket"
                        class="zoom-image w-full h-full object-cover transition duration-300 ease-in-out transform hover:scale-110" />
                </div>
            </div>
            <!-- Kartu Category -->
            <div class="product-card max-w-xs w-full overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
                data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
                <div class="aspect-[1/1] w-full overflow-hidden content-over-media">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket"
                        class="zoom-image w-full h-full object-cover transition duration-300 ease-in-out transform hover:scale-110" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END CATEGORI PRODUK -->
<?php
include 'komponen/footer.php';
?>