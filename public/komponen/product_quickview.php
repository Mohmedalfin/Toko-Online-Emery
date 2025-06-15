<div class="relative z-100" role="dialog" aria-modal="true">
    <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block" aria-hidden="true"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
            <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                <div
                    class="relative flex w-full items-center overflow-hidden bg-tertiary px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8 rounded-md">
                    <button type="button" onclick="closeQuickView()"
                        class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                        <div class="sm:col-span-4 lg:col-span-5">
                            <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100">
                                <img src="../../asset/img/H1.jpg"
                                    alt="Back angled view with bag open and handles to the side."
                                    class="object-cover object-center">
                            </div>
                        </div>
                        <div class="sm:col-span-8 lg:col-span-7">
                            <h2 class="text-xl font-bold text-font_primary sm:pr-12 text-upper">Pashmina Plisket – Pink
                                Dusty</h2>

                            <section aria-labelledby="information-heading" class="mt-3">
                                <h3 id="information-heading" class="sr-only">Product information</h3>

                                <p class="text-xl text-font_jingga">RP. 150.000</p>

                                <div class="mt-4 border-t border-gray-200 px-4 py-6">
                                    <h4 class="sr-only">Description</h4>

                                    <p class="text-sm text-gray-700">The Zip Tote Basket is the perfect midpoint between
                                        shopping tote and comfy backpack. With convertible straps, you can hand carry,
                                        should sling, or backpack this convenient and spacious bag. The zip top and
                                        durable canvas construction keeps your goods protected for all-day use.</p>
                                </div>
                            </section>

                            <div
                                class="mt-3 inline-flex items-center border rounded-md bg-tertiary text-gray-500 text-lg px-6 py-2 gap-4 select-none">
                                <button onclick="decreaseQty()" class="hover:text-secondary">−</button>
                                <span id="quantity" class="font-medium text-primary">2</span>
                                <button onclick="increaseQty()" class="hover:text-secondary">+</button>
                            </div>
                            <section aria-labelledby="options-heading" class="mt-6">

                                <h3 id="options-heading" class="sr-only">Product options</h3>
                                <form>

                                    <div class="mt-6">
                                        <button type="submit"
                                            class="flex w-full items-center justify-center rounded-md border border-transparent bg-secondary hover:bg-primary px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Add
                                            to bag</button>
                                    </div>

                                    <p class="absolute left-4 top-4 text-center sm:static sm:mt-6">
                                        <a href="#" class="font-medium text-secondary hover:text-primary">View full
                                            details</a>
                                    </p>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>