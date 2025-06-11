<?php
include 'komponen/header.php';
?>

<!-- Hero Section -->
<section class="relative w-full overflow-hidden mt-16"">
 <div class=" flex w-[100%] transition-transform duration-700 ease-in-out">
    <div class="w-full flex-shrink-0 relative text-center">
        <picture data-aos="zoom-in" data-aos-duration="1000">
            <source media="(min-width: 768px)" srcset="../asset/img/Hero1.webp" />
            <img src="../asset/img/Hero-Mobile1.webp" alt="Hero" class="mx-auto block max-w-full"
                style="height: auto; width: auto;" />
        </picture>
    </div>
    </div>
</section>
<!-- Hero Section -->

<!-- Start Filter -->
<div class="bg-white">
    <div>
        <div class="relative z-[999] lg:hidden" role="dialog" aria-modal="true">
            <div id="filterBackdrop"
                class="fixed inset-0 bg-black bg-opacity-25 opacity-0 pointer-events-none transition-opacity duration-300"
                aria-hidden="true"></div>

            <div id="filterPanel" class="fixed inset-0 z-40 flex transition transform duration-300 translate-x-full">
                <div class="relative ml-auto flex h-full w-full max-w-xs flex-col bg-white shadow-xl">
                    <div class="flex items-center justify-between px-4 mt-4">
                        <h2 class="text-lg font-medium text-gray-900 ">Filters</h2>
                        <button id="closeFilterBtn" type="button"
                            class="-mr-2 flex h-10 w-10 items-center justify-center p-2 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Filters -->
                    <form class="flex-1 overflow-y-auto mt-4">
                        <div class="border-t border-gray-200 pb-4 pt-4">
                            <fieldset>
                                <legend class="w-full px-2">
                                    <button type="button"
                                        class="filter-toggle flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-0" aria-expanded="false">
                                        <span class="text-sm font-medium text-gray-900">Color</span>
                                        <span class="ml-6 flex h-7 items-center">
                                            <svg class="h-5 w-5 rotate-0 transform" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </legend>
                                <div class="px-4 pb-2 pt-4" id="filter-section-0">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="color-0-mobile" name="color[]" value="white" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="color-0-mobile" class="ml-3 text-sm text-gray-500">White</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="color-1-mobile" name="color[]" value="beige" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="color-1-mobile" class="ml-3 text-sm text-gray-500">Beige</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="border-t border-gray-200 pb-4 pt-4">
                            <fieldset>
                                <legend class="w-full px-2">
                                    <button type="button"
                                        class="filter-toggle flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-1" aria-expanded="false">
                                        <span class="text-sm font-medium text-gray-900">Category</span>
                                        <span class="ml-6 flex h-7 items-center">
                                            <svg class="h-5 w-5 rotate-0 transform" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </legend>
                                <div class="px-4 pb-2 pt-4" id="filter-section-1">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="category-0-mobile" name="category[]" value="new-arrivals"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="category-0-mobile" class="ml-3 text-sm text-gray-500">All
                                                New Arrivals</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="category-1-mobile" name="category[]" value="tees" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="category-1-mobile"
                                                class="ml-3 text-sm text-gray-500">Tees</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="border-t border-gray-200 pb-4 pt-4">
                            <fieldset>
                                <legend class="w-full px-2">
                                    <button type="button"
                                        class="filter-toggle flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-2" aria-expanded="false">
                                        <span class="text-sm font-medium text-gray-900">Sizes</span>
                                        <span class="ml-6 flex h-7 items-center">
                                            <svg class="h-5 w-5 rotate-0 transform" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </legend>
                                <div class="px-4 pb-2 pt-4" id="filter-section-2">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="sizes-0-mobile" name="sizes[]" value="xs" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="sizes-0-mobile" class="ml-3 text-sm text-gray-500">XS</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="sizes-1-mobile" name="sizes[]" value="s" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="sizes-1-mobile" class="ml-3 text-sm text-gray-500">S</label>
                                        </div>
                                    </div>


                                </div>
                            </fieldset>

                        </div>
                    </form>
                    <div class="sticky bottom-0 left-0 w-full bg-white border-t border-gray-200 px-4 py-4 z-10">
                        <button type="submit"
                            class="w-full rounded-md bg-primary px-4 py-3 text-center text-sm font-semibold text-white shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                            SEE RESULTS
                        </button>
                    </div>
                </div>
                <!-- Sticky Search Button -->
            </div>

        </div>

        <main class="mx-auto max-w-2xl px-2 py-16 md:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="border-b border-gray-200 pb-10">
                <h1 class="text-4xl font-bold tracking-tight text-font_primary">Allya Set</h1>
                <p class="mt-4 text-base text-font_primary">Checkout out the latest release of Basic Tees, new and
                    improved with
                    four openings!</p>
            </div>

            <div class="pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
                <aside>
                    <h2 class="sr-only">Filters</h2>

                    <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
                    <button id="openFilterBtn" type="button" class="inline-flex items-center lg:hidden">
                        <span class="text-sm font-medium text-gray-700">Filters</span>
                        <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                    </button>

                    <div class="hidden lg:block">
                        <form class="space-y-10 divide-y divide-gray-200">
                            <div>
                                <fieldset>
                                    <legend class="block text-sm font-medium text-gray-900">Color</legend>
                                    <div class="space-y-3 pt-6">
                                        <div class="flex items-center">
                                            <input id="color-0" name="color[]" value="white" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="color-0" class="ml-3 text-sm text-gray-600">White</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="color-1" name="color[]" value="beige" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="color-1" class="ml-3 text-sm text-gray-600">Beige</label>
                                        </div>

                                    </div>
                                </fieldset>
                            </div>
                            <div class="pt-10">
                                <fieldset>
                                    <legend class="block text-sm font-medium text-gray-900">Category</legend>
                                    <div class="space-y-3 pt-6">
                                        <div class="flex items-center">
                                            <input id="category-0" name="category[]" value="new-arrivals"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="category-0" class="ml-3 text-sm text-gray-600">All New
                                                Arrivals</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="category-1" name="category[]" value="tees" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="category-1" class="ml-3 text-sm text-gray-600">Tees</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="pt-10">
                                <fieldset>
                                    <legend class="block text-sm font-medium text-gray-900">Sizes</legend>
                                    <div class="space-y-3 pt-6">
                                        <div class="flex items-center">
                                            <input id="sizes-0" name="sizes[]" value="xs" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="sizes-0" class="ml-3 text-sm text-gray-600">XS</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="sizes-1" name="sizes[]" value="s" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                            <label for="sizes-1" class="ml-3 text-sm text-gray-600">S</label>
                                        </div>
                                    </div>
                                    <div class="pt-10">
                                        <button type="submit"
                                            class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2 text-white text-sm font-semibold shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                                            </svg>
                                            <span>Search</span>
                                        </button>
                                    </div>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </aside>

                <!-- Product grid -->
                <div class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
                    <div id="productGrid"
                        class="mx-auto grid grid-cols-2 lg:grid-cols-3 gap-2 justify-center w-full max-w-screen-xl lg:p-2">

                        <!-- Kartu Produk -->
                        <div class="product-card max-w-xs w-full rounded-xl overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="aspect-[3/4] w-full">
                                <img src="../../asset/img/H1.jpg" alt="Pashmina Plisket"
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
                                    Jenis : Premium
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
                        <div class="product-card max-w-xs w-full rounded-xl overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
                            data-aos="fade-up" data-aos-delay="100">
                            <!-- Gambar Produk -->
                            <div class="aspect-[3/4] w-full">
                                <img src="../../asset/img/H1.jpg" alt="Pashmina Plisket"
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
                                    Jenis : Premium
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
                        <div class="product-card max-w-xs w-full rounded-xl overflow-hidden border shadow-sm bg-tertiary hover:shadow-md transition-shadow duration-300"
                            data-aos="fade-up" data-aos-delay="100">
                            <!-- Gambar Produk -->
                            <div class="aspect-[3/4] w-full">
                                <img src="../../asset/img/H1.jpg" alt="Pashmina Plisket"
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
                                    Jenis : Premium
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
            </div>
        </main>
    </div>
</div>
<!-- End Filter -->

<?php
include 'komponen/footer.php';
?>