<?php
include 'komponen/header.php';
?>


<section class="mt-16 md:mt-20">
    <div class="bg-white">
        <main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
                <!-- Product -->
                <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-14">
                    <!-- Image gallery -->
                    <div class="flex flex-col-reverse">
                        <!-- Image selector -->
                        <div class="mx-auto mt-6 hidden w-full max-w-2xl sm:block lg:max-w-none">
                            <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">
                                <button id="tabs-2-tab-1"
                                    class="relative flex h-32 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-secondary focus:ring-opacity-50 focus:ring-offset-4"
                                    aria-controls="tabs-2-panel-1" role="tab" type="button">
                                    <span class="sr-only">Angled view</span>
                                    <span class="absolute inset-0 overflow-hidden rounded-md">
                                        <img src="../../asset/img/H1.jpg" alt=""
                                            class="h-full w-full object-cover object-center">
                                    </span>
                                    <!-- Selected: "ring-indigo-500", Not Selected: "ring-transparent" -->
                                    <span
                                        class="pointer-events-none absolute inset-0 rounded-md ring-2 ring-transparent ring-offset-2"
                                        aria-hidden="true"></span>
                                </button>
                                <button id="tabs-2-tab-1"
                                    class="relative flex h-32 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-secondary focus:ring-opacity-50 focus:ring-offset-4"
                                    aria-controls="tabs-2-panel-1" role="tab" type="button">
                                    <span class="sr-only">Angled view</span>
                                    <span class="absolute inset-0 overflow-hidden rounded-md">
                                        <img src="../../asset/img/H1.jpg" alt=""
                                            class="h-full w-full object-cover object-center">
                                    </span>
                                    <!-- Selected: "ring-indigo-500", Not Selected: "ring-transparent" -->
                                    <span
                                        class="pointer-events-none absolute inset-0 rounded-md ring-2 ring-transparent ring-offset-2"
                                        aria-hidden="true"></span>
                                </button>

                                <!-- More images... -->
                            </div>
                        </div>

                        <div class="aspect-h-1 aspect-w-1 w-full">
                            <!-- Tab panel, show/hide based on tab state. -->
                            <div id="tabs-2-panel-1" aria-labelledby="tabs-2-tab-1" role="tabpanel" tabindex="0">
                                <img src="../../asset/img/H1.jpg"
                                    alt="Angled front view with bag zipped and handles upright."
                                    class="h-full w-full object-cover object-center sm:rounded-lg">
                            </div>

                            <!-- More images... -->
                        </div>
                    </div>

                    <!-- Product info -->
                    <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
                        <h1 class="text-base-xl md:text-base-2xl font-bold tracking-tight text-font_primary">
                            Pashmina
                            Plisket – Pink
                            Dusty
                        </h1>

                        <div class="mt-1">
                            <h2 class="sr-only">Product information</h2>
                            <p class="text-base-xl md:text-base-2xl tracking-tight text-font_jingga">Rp. 150.000</p>
                        </div>

                        <section aria-labelledby="details-heading" class="mt-8">
                            <h2 id="details-heading" class="sr-only">Additional details</h2>

                            <div class="divide-y divide-gray-200 border-t">
                                <div>
                                    <h3>
                                        <button type="button"
                                            class="group flex w-full items-center justify-between py-6 text-left"
                                            onclick="toggleDisclosure('disclosure-1', this)"
                                            aria-controls="disclosure-1" aria-expanded="false">
                                            <span
                                                class="text-lg font-medium text-secondary group-[.open]:text-primary">Deskripsi</span>
                                            <span class="ml-6 flex items-center">
                                                <!-- Icon + -->
                                                <svg class="block h-6 w-6 text-gray-400 group-[.open]:hidden"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>
                                                <!-- Icon - -->
                                                <svg class="hidden h-6 w-6 text-primary group-[.open]:block" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 12h-15" />
                                                </svg>
                                            </span>
                                        </button>

                                    </h3>
                                    <div class="prose prose-sm pb-6" id="disclosure-1">
                                        <p class="max-w-xl text-base text-font_primary">Scarf dengan material Voal Liza
                                            yang lembut, ringan dan mudah di-styling, berukuran 120x120 cm. Terinspirasi
                                            dari motif zelige khas Maroko, Cocok digunakan pada momen harian maupun
                                            untuk ciptakan tampilan elegan dan classy. Tersedia dalam 10 pilihan warna,
                                            dilengkapi dengan plat L terbaru khas elzatta yang menambah keanggunan
                                            outfit sehari-hari.</p>

                                        <div class="max-w-xl my-4">
                                            <img src="../asset/img/size_hijab.webp" alt="Scarf Voal Liza - Elzatta"
                                                class="w-full shadow" />
                                        </div>

                                        <ul class="max-w-xl text-base text-font_primary">
                                            <li>Tipe : Premium</li>
                                            <li>Include : Plat Round Diamond</li>
                                        </ul>

                                        <p class="max-w-xl text-base text-font_primary">- Warna produk pada foto dapat
                                            sedikit berbeda dengan warna asli akibat pencahayaan saat pemotretan atau
                                            perbedaan pengaturan layar pada perangkat Anda. Kami berusaha menampilkan
                                            warna seakurat mungkin, namun tidak dapat menjamin kesamaan 100%. <br>
                                            - Ukuran produk mengacu pada size chart yang tersedia, namun terdapat
                                            toleransi perbedaan ±1-2 cm akibat proses produksi dan cutting. Pastikan
                                            untuk memeriksa size chart sebelum membeli.</p>
                                    </div>
                                </div>

                                <!-- More sections... -->
                            </div>
                        </section>

                        <div
                            class="mt-3 inline-flex items-center border rounded-md bg-tertiary text-gray-500 text-lg px-6 py-2 gap-4 select-none">
                            <button onclick="decreaseQty()" class="hover:text-secondary">−</button>
                            <span id="quantity" class="font-medium text-primary">2</span>
                            <button onclick="increaseQty()" class="hover:text-secondary">+</button>
                        </div>

                        <form class="mt-6" action="checkout.php">
                            <div class="mt-10 flex">
                                <button type="submit"
                                    class="flex max-w-xs flex-1 items-center justify-center rounded-md border border-transparent bg-secondary px-8 py-3 text-base font-medium text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-offset-2 focus:ring-primary sm:w-full">Check
                                    Out</button>

                                <button type="button"
                                    class="ml-4 flex items-center justify-center rounded-md px-3 py-3 text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                                    <svg class="h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                    <span class="sr-only">Chek Out</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <section aria-labelledby="related-heading" class="mt-10 border-t border-gray-200 px-2 py-16 sm:px-0">
                    <h2 id="related-heading" class="text-xl font-bold text-gray-900">Customers also bought</h2>

                    <div class="py-8">
                        <div id="productGrid"
                            class="mx-auto max-w-screen-2xl grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 lg:gap-4 place-items-center lg:px-4 xl:px-0">

                            <!-- Kartu Produk -->
                            <div
                                class="product-card w-full max-w-md rounded-2xl overflow-hidden border border-gray-200 shadow hover:shadow-lg bg-tertiary transition-shadow duration-300">

                                <!-- Gambar Produk -->
                                <div class="spect-video w-full">
                                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket"
                                        class="w-full h-full object-cover" />
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
                                        Premium
                                    </p>

                                    <!-- Rating dan Tombol -->
                                    <div class="flex items-center justify-between mt-2">
                                        <div class="flex items-center gap-1 text-sm text-font_primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span>4.7</span>
                                        </div>

                                        <button class="text-font_jingga hover:text-rose-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Kartu Produk -->
                            <div
                                class="product-card w-full max-w-md rounded-2xl overflow-hidden border border-gray-200 shadow hover:shadow-lg bg-tertiary transition-shadow duration-300">

                                <!-- Gambar Produk -->
                                <div class="spect-video w-full">
                                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket"
                                        class="w-full h-full object-cover" />
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
                                        Premium
                                    </p>

                                    <!-- Rating dan Tombol -->
                                    <div class="flex items-center justify-between mt-2">
                                        <div class="flex items-center gap-1 text-sm text-font_primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span>4.7</span>
                                        </div>

                                        <button class="text-font_jingga hover:text-rose-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Kartu Produk -->
                            <div
                                class="product-card w-full max-w-md rounded-2xl overflow-hidden border border-gray-200 shadow hover:shadow-lg bg-tertiary transition-shadow duration-300">

                                <!-- Gambar Produk -->
                                <div class="spect-video w-full">
                                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket"
                                        class="w-full h-full object-cover" />
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
                                        Premium
                                    </p>

                                    <!-- Rating dan Tombol -->
                                    <div class="flex items-center justify-between mt-2">
                                        <div class="flex items-center gap-1 text-sm text-font_primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span>4.7</span>
                                        </div>

                                        <button class="text-font_jingga hover:text-rose-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Kartu Produk -->
                            <div
                                class="product-card w-full max-w-md rounded-2xl overflow-hidden border border-gray-200 shadow hover:shadow-lg bg-tertiary transition-shadow duration-300">

                                <!-- Gambar Produk -->
                                <div class="spect-video w-full">
                                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket"
                                        class="w-full h-full object-cover" />
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
                                        Premium
                                    </p>

                                    <!-- Rating dan Tombol -->
                                    <div class="flex items-center justify-between mt-2">
                                        <div class="flex items-center gap-1 text-sm text-font_primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span>4.7</span>
                                        </div>

                                        <button class="text-font_jingga hover:text-rose-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </main>
    </div>
</section>

<?php
include 'komponen/footer.php';
?>