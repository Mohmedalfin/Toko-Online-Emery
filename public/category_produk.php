<?php
include 'komponen/header.php';
?>

<!-- Hero Section -->
<section class="relative w-full overflow-hidden mt-16"">
   <div class=" flex w-full transition-transform duration-700 ease-in-out">
    <div class="w-full flex-shrink-0 relative text-center">
        <picture data-aos="zoom-in" data-aos-duration="1000">
            <source media="(min-width: 768px)" srcset="/asset/img/Hero1.webp" />
            <img src="/asset/img/Hero-Mobile1.webp" alt="Hero" class="w-full h-auto object-cover" />
        </picture>
    </div>
    </div>
</section>
<!-- Hero Section -->

<!-- Filter Button -->
<section>
    <div class="bg-white">
        <div class="px-4 py-16 text-center sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold tracking-tight text-font_jingga">Alayya Set</h1>
            <p class="mt-4 max-w-4xl mx-auto text-gray-500">The secret to a tidy desk? Don't get rid of
                anything, just put it in really really nice looking containers.</p>
        </div>

        <!-- Filters -->
        <section aria-labelledby="filter-heading" class="grid items-center border-b border-t border-gray-200">
            <h2 id="filter-heading" class="sr-only">Filters</h2>
            <div class="relative col-start-1 row-start-1 py-4">
                <div class="mx-auto flex max-w-7xl space-x-6 divide-x divide-gray-200 px-4 text-sm sm:px-6 lg:px-8">
                    <div>
                        <button onclick="toggleDropdown('dropdownCategory')" type="button"
                            class="group flex items-center font-medium text-gray-700" aria-controls="disclosure-1"
                            aria-expanded="false">
                            <svg class="mr-2 h-5 w-5 flex-none text-secondary group-hover:text-primary"
                                aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                    clip-rule="evenodd" />
                            </svg>
                            Filters
                        </button>
                    </div>
                </div>
            </div>
            <div id="dropdownCategory" class="hidden border-t border-gray-200 py-10" id="disclosure-1">
                <div class="mx-auto grid max-w-7xl grid-cols-2 gap-x-4 px-4 text-sm sm:px-6 md:gap-x-6 lg:px-8">
                    <div class="grid auto-rows-min grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-6">
                        <fieldset>
                            <legend class="block font-medium">Price</legend>
                            <div class="w-full max-w-md mx-auto">
                                <!-- Slider Wrapper -->
                                <div class="relative h-10 flex items-center">
                                    <!-- Slider Track -->
                                    <div class="absolute w-full h-1 bg-secondary rounded"></div>

                                    <!-- Range Min -->
                                    <input type="range" id="rangeMin" min="0" max="500000" value="0"
                                        class="range-thumb w-full bg-transparent appearance-none pointer-events-none z-10">

                                    <!-- Range Max -->
                                    <input type="range" id="rangeMax" min="0" max="500000" value="240000"
                                        class="range-thumb w-full bg-transparent appearance-none pointer-events-none z-10">
                                </div>

                                <!-- Input Harga -->
                                <div class="mt-4 flex justify-between items-center text-sm text-gray-600">
                                    <div class="flex items-center gap-1">
                                        <span class="pr-2">Rp</span><input id="minPrice" type="text" readonly
                                            class="w-22 text-end bg-transparent outline-none" />
                                    </div>
                                    <span class="hidden lg:block">-</span>
                                    <div class=" ml-2 md:ml-0 flex items-center gap-1">
                                        <span class="pr-2">Rp</span><input id="maxPrice" type="text" readonly
                                            class="w-22 text-end bg-transparent outline-none" />
                                    </div>
                                </div>
                            </div>
                            <div class="text-start mt-8">
                                <button href="#"
                                    class="px-6 py-2  bg-secondary hover:bg-primary text-white rounded-xl font-medium transition">
                                    Tampilkan
                                </button>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <!-- Sort Button -->
            <div class="col-start-1 row-start-1 py-4">
                <div class="mx-auto flex max-w-7xl justify-end px-4 sm:px-6 lg:px-8">
                    <div class="relative inline-block">
                        <div class="flex">
                            <button onclick="toggleDropdown('dropdownSort')" type="button"
                                class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                id="menu-button" aria-expanded="false" aria-haspopup="true">
                                Sort
                                <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div id="dropdownSort"
                            class="hidden absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-sm bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem"
                                    tabindex="-1" id="menu-item-0">Most Popular</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1"
                                    id="menu-item-1">Best Rating</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1"
                                    id="menu-item-2">Newest</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- PRODUK KE-1 -->
<section class="relative w-full overflow-hidden">
    <!-- Card Produk -->
    <div class="py-10 p-2">
        <div id="productGrid"
            class="mx-auto max-w-screen-2xl grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 lg:gap-4 place-items-center lg:px-4 xl:px-0">

            <!-- Kartu Produk -->
            <div data-aos="fade-up"
                class="product-card cursor-pointer w-full max-w-md rounded-xl overflow-hidden border border-gray-200 shadow hover:shadow-lg bg-tertiary transition-shadow duration-300"
                data-category="instan" onclick="window.location.href='product_page.php'">

                <!-- Gambar Produk -->
                <div class="spect-video w-full">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
                </div>

                <!-- Konten Produk -->
                <div class="p-4 space-y-1">
                    <p class="font-medium text-base-xxs md:text-sm  text-font_primary text-upper line-clamp-2">
                        Pashmina Plisket – Pink Dusty
                    </p>
                    <p class="text-base-xxs md:text-sm font-medium text-font_jingga">
                        RP. 200.000,-
                    </p>
                    <p class="font-medium text-font_jingga text-base-xxs md:text-sm">
                        Premium
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

                        <button onclick="event.stopPropagation(); openQuickView('P001')"
                            class="text-font_jingga hover:text-rose-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kartu Produk -->
            <div data-aos="fade-up"
                class="product-card cursor-pointer w-full max-w-md rounded-xl overflow-hidden border border-gray-200 shadow hover:shadow-lg bg-tertiary transition-shadow duration-300"
                data-category="instan" onclick="window.location.href='product_page.php'">

                <!-- Gambar Produk -->
                <div class="spect-video w-full">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
                </div>

                <!-- Konten Produk -->
                <div class="p-4 space-y-1">
                    <p class="font-medium text-base-xxs md:text-sm  text-font_primary text-upper line-clamp-2">
                        Pashmina Plisket – Pink Dusty
                    </p>
                    <p class="text-base-xxs md:text-sm font-medium text-font_jingga">
                        RP. 200.000,-
                    </p>
                    <p class="font-medium text-font_jingga text-base-xxs md:text-sm">
                        Premium
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

                        <button onclick="event.stopPropagation(); openQuickView('P001')"
                            class="text-font_jingga hover:text-rose-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kartu Produk -->
            <div data-aos="fade-up"
                class="product-card cursor-pointer w-full max-w-md rounded-xl overflow-hidden border border-gray-200 shadow hover:shadow-lg bg-tertiary transition-shadow duration-300"
                data-category="instan" onclick="window.location.href='product_page.php'">

                <!-- Gambar Produk -->
                <div class="spect-video w-full">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
                </div>

                <!-- Konten Produk -->
                <div class="p-4 space-y-1">
                    <p class="font-medium text-base-xxs md:text-sm  text-font_primary text-upper line-clamp-2">
                        Pashmina Plisket – Pink Dusty
                    </p>
                    <p class="text-base-xxs md:text-sm font-medium text-font_jingga">
                        RP. 200.000,-
                    </p>
                    <p class="font-medium text-font_jingga text-base-xxs md:text-sm">
                        Premium
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

                        <button onclick="event.stopPropagation(); openQuickView('P001')"
                            class="text-font_jingga hover:text-rose-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kartu Produk -->
            <div data-aos="fade-up"
                class="product-card cursor-pointer w-full max-w-md rounded-xl overflow-hidden border border-gray-200 shadow hover:shadow-lg bg-tertiary transition-shadow duration-300"
                data-category="instan" onclick="window.location.href='product_page.php'">

                <!-- Gambar Produk -->
                <div class="spect-video w-full">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
                </div>

                <!-- Konten Produk -->
                <div class="p-4 space-y-1">
                    <p class="font-medium text-base-xxs md:text-sm  text-font_primary text-upper line-clamp-2">
                        Pashmina Plisket – Pink Dusty
                    </p>
                    <p class="text-base-xxs md:text-sm font-medium text-font_jingga">
                        RP. 200.000,-
                    </p>
                    <p class="font-medium text-font_jingga text-base-xxs md:text-sm">
                        Premium
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

                        <button onclick="event.stopPropagation(); openQuickView('P001')"
                            class="text-font_jingga hover:text-rose-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 4v16m8-8H4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kartu Produk -->
            <div data-aos="fade-up"
                class="product-card cursor-pointer w-full max-w-md rounded-xl overflow-hidden border border-gray-200 shadow hover:shadow-lg bg-tertiary transition-shadow duration-300"
                data-category="instan" onclick="window.location.href='product_page.php'">

                <!-- Gambar Produk -->
                <div class="spect-video w-full">
                    <img src="../asset/img/H1.jpg" alt="Pashmina Plisket" class="w-full h-full object-cover" />
                </div>

                <!-- Konten Produk -->
                <div class="p-4 space-y-1">
                    <p class="font-medium text-base-xxs md:text-sm  text-font_primary text-upper line-clamp-2">
                        Pashmina Plisket – Pink Dusty
                    </p>
                    <p class="text-base-xxs md:text-sm font-medium text-font_jingga">
                        RP. 200.000,-
                    </p>
                    <p class="font-medium text-font_jingga text-base-xxs md:text-sm">
                        Premium
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

                        <button onclick="event.stopPropagation(); openQuickView('P001')"
                            class="text-font_jingga hover:text-rose-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" fill="none"
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
<!-- END PRODUK KE 1 -->



<?php
include 'komponen/footer.php';
?>