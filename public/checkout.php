<?php
$base_url = "/public"; // Ganti sesuai dengan root URL proyek kamu
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Emery.com</title>

    <!-- Style Tailwind -->
    <link rel="stylesheet" href="<?= $base_url ?>/css/style-tailwind.css" />

    <!-- Googlr font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Icon Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
</head>

<body>
    <!-- Navbar -->
    <header class="fixed top-0 z-50 left-0 w-full shadow">
        <div class="bg-white">
            <!-- Navigation -->
            <header class="relative sticky top-0">
                <nav aria-label="Top">
                    <!-- Main Nav -->
                    <div class="bg-white border-b border-gray-200">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <div class="flex h-16 items-center justify-between">

                                <!-- Logo Desktop -->
                                <div class="hidden lg:flex lg:items-center">
                                    <a href="index.html"><img class="h-14 w-auto" src="/asset/img/image.png"
                                            alt="Logo" /></a>
                                </div>

                                <!-- Logo Mobile  -->
                                <div class="flex flex-1 items-center justify-center lg:hidden">
                                    <a href="#">
                                        <img src="/asset/img/image.png" class="h-20 w-auto" alt="Logo" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
    </header>

    <!-- Checout Payment  -->
    <section class="relative bg-white mt-16">
        <!-- Background color split for large screens -->
        <div class="absolute inset-0 h-full w-full " aria-hidden="true">
            <div class="lg:grid lg:grid-cols-2 h-full w-full">
                <div class="hidden lg:block bg-white h-full"></div>
                <div class="bg-tertiary h-full w-full lg:w-auto"></div>
            </div>
        </div>


        <!-- Konten utama -->
        <div class="relative z-10 mx-auto max-w-7xl grid lg:grid-cols-2 lg:gap-8">

            <!-- LEFT: Payment & Shipping -->
            <section aria-labelledby="payment-and-shipping-heading" class="bg-white p-2 lg:p-10 ">
                <form>
                    <!-- Infromasi User -->
                    <div class="mx-auto max-w-2xl px-2 lg:max-w-none lg:px-0 mb-10 mt-6">
                        <div>
                            <h2 class="text-lg font-medium text-gray-900">Contact information</h2>

                            <div class="mt-4">
                                <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                    address</label>
                                <div class="mt-1">
                                    <input type="email" id="email-address" name="email-address" autocomplete="email"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 border-t border-gray-200 pt-10">
                            <h2 class="text-lg font-medium text-gray-900">Shipping information</h2>

                            <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                                <div>
                                    <label for="first-name" class="block text-sm font-medium text-font_primary">First
                                        name</label>
                                    <div class="mt-1">
                                        <input type="text" id="first-name" name="first-name" autocomplete="given-name"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="last-name" class="block text-sm font-medium text-font_primary">Last
                                        name</label>
                                    <div class="mt-1">
                                        <input type="text" id="last-name" name="last-name" autocomplete="family-name"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="company"
                                        class="block text-sm font-medium text-font_primary">Company</label>
                                    <div class="mt-1">
                                        <input type="text" name="company" id="company"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primarysm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="address"
                                        class="block text-sm font-medium text-font_primary">Address</label>
                                    <div class="mt-1">
                                        <input type="text" name="address" id="address" autocomplete="street-address"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="apartment"
                                        class="block text-sm font-medium text-font_primary">Apartment,
                                        suite,
                                        etc.</label>
                                    <div class="mt-1">
                                        <input type="text" name="apartment" id="apartment"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary  sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="city" class="block text-sm font-medium text-font_primary">City</label>
                                    <div class="mt-1">
                                        <input type="text" name="city" id="city" autocomplete="address-level2"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary  sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="country"
                                        class="block text-sm font-medium text-font_primary">Country</label>
                                    <div class="mt-1">
                                        <select id="country" name="country" autocomplete="country-name"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary  sm:text-sm">
                                            <option>Indonesia</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="region" class="block text-sm font-medium text-font_primary">State /
                                        Province</label>
                                    <div class="mt-1">
                                        <input type="text" name="region" id="region" autocomplete="address-level1"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary  sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="postal-code" class="block text-sm font-medium text-font_primary">Postal
                                        code</label>
                                    <div class="mt-1">
                                        <input type="text" name="postal-code" id="postal-code"
                                            autocomplete="postal-code"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary  sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                    <div class="mt-1">
                                        <input type="text" name="phone" id="phone" autocomplete="tel"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delivery -->
                        <div class="mt-10 border-t border-gray-200 pt-10">
                            <h2 class="text-lg font-medium text-gray-900">Delivery Method</h2>
                            <fieldset class="mt-4">
                                <div class="space-y-4">

                                    <!-- JNE -->
                                    <label
                                        class="relative flex cursor-pointer items-center rounded-lg border border-gray-300 p-4 shadow-sm transition peer-checked:border-primary peer-checked:ring-2 peer-checked:ring-primary">
                                        <input type="radio" name="shipping_method" value="jne" class="sr-only peer" />
                                        <div
                                            class="h-4 w-4 rounded-full border-2 border-gray-400 peer-checked:border-primary peer-checked:ring-2 peer-checked:ring-primary transition shrink-0">
                                        </div>
                                        <div class="ml-3 flex w-full flex-col">
                                            <span class="text-sm font-medium text-gray-900">JNT – Layanan
                                                Reguler</span>
                                            <span class="text-sm text-gray-500 mt-1">Estimasi 3–6 hari, biaya
                                                pengiriman
                                                + 3
                                                digit kode pembayaran</span>
                                        </div>
                                        <div class="ml-auto text-right space-y-1">
                                            <span
                                                class="block text-sm text-font_primary line-through">Rp&nbsp;20.227,00</span>
                                        </div>
                                    </label>

                                    <!-- JNE -->
                                    <label
                                        class="relative flex cursor-pointer items-center rounded-lg border border-gray-300 p-4 shadow-sm transition peer-checked:border-primary peer-checked:ring-2 peer-checked:ring-primary">

                                        <input type="radio" name="shipping_method" value="jne" class="sr-only peer" />
                                        <div
                                            class="h-4 w-4 rounded-full border-2 border-gray-400 peer-checked:border-primary peer-checked:ring-2 peer-checked:ring-primary transition shrink-0">
                                        </div>
                                        <div class="ml-3 flex w-full flex-col">
                                            <span class="text-sm font-medium text-gray-900">JNE – Layanan
                                                Reguler</span>
                                            <span class="text-sm text-gray-500 mt-1">Estimasi 3–6 hari, biaya
                                                pengiriman
                                                + 3
                                                digit kode pembayaran</span>
                                        </div>
                                        <div class="ml-auto text-right space-y-1">
                                            <span
                                                class="block text-sm text-font_primary line-through">Rp&nbsp;20.227,00</span>
                                        </div>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <!-- Payment -->
                        <div class="mt-10 border-t border-gray-200 pt-10">
                            <h2 class="text-lg font-medium text-gray-900">Packing</h2>
                            <fieldset class="mt-4">
                                <legend class="sr-only">Payment type</legend>
                                <div class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">

                                    <!-- Opsi 1: Premium -->
                                    <label for="credit-card" class="flex items-center cursor-pointer">
                                        <input type="radio" name="packing" id="credit-card" class="sr-only peer"
                                            checked />
                                        <div
                                            class="h-4 w-4 rounded-full border-2 border-gray-300 peer-checked:border-primary peer-checked:ring-2 peer-checked:ring-primary transition">
                                        </div>
                                        <span class="ml-3 text-sm font-medium text-font_primary">Packing
                                            Premium</span>
                                    </label>

                                    <!-- Opsi 2: Standar -->
                                    <label for="paypal" class="flex items-center cursor-pointer">
                                        <input type="radio" name="packing" id="paypal" class="sr-only peer" />
                                        <div
                                            class="h-4 w-4 rounded-full border-2 border-gray-300 peer-checked:border-primary peer-checked:ring-2 peer-checked:ring-primary transition">
                                        </div>
                                        <span class="ml-3 text-sm font-medium text-font_primary">Packing
                                            Standar</span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </section>

            <!-- RIGHT: Order Summary -->
            <section aria-labelledby="summary-heading" class="bg-transparent p-2 lg:p-10 text-indigo-100">
                <!-- isi summary kamu -->
                <div class="mx-auto max-w-2xl px-2 lg:max-w-none lg:px-0 mt-3 lg:mt-6">
                    <h2 class=" text-lg font-medium text-gray-900">Order summary</h2>

                    <div class="mt-4 rounded-lg border border-gray-200 bg-white shadow-sm">
                        <h3 class="sr-only">Items in your cart</h3>
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="flex px-4 py-6 sm:px-6">
                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                    <img src="../../asset/img/H1.jpg"
                                        alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                        class="h-full w-full object-cover object-center">
                                </div>

                                <div class="ml-4 flex flex-1 flex-col">
                                    <div>
                                        <div class="flex justify-between text-base font-medium text-font_primary">
                                            <h3>
                                                <a href="#">Throwback Hip Bag</a>
                                            </h3>
                                            <p class="ml-4">$90.00</p>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">Premium</p>
                                        <p class="text-sm text-gray-500">L</p>
                                    </div>
                                    <div class="flex flex-1 items-end justify-between text-sm">
                                        <p class="text-gray-500">Qty 1</p>

                                        <div class="flex">
                                            <button type="button" class="font-medium text-primary">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- More products... -->
                        </ul>
                        <dl class="space-y-6 border-t border-gray-200 px-4 py-6 sm:px-6">
                            <div class="flex items-center justify-between">
                                <dt class="text-sm text-font_primary">Subtotal</dt>
                                <dd class="text-sm font-medium text-font_primary">$64.00</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-sm text-font_primary">Shipping</dt>
                                <dd class="text-sm font-medium text-font_primary">$5.00</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-sm text-font_primary">Taxes</dt>
                                <dd class="text-sm font-medium text-font_primary">$5.52</dd>
                            </div>
                            <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                                <dt class="text-base font-medium text-font_primary">Total</dt>
                                <dd class="text-base font-medium text-font_primary">$75.52</dd>
                            </div>
                        </dl>

                        <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                            <button type="submit"
                                class="w-full rounded-md border border-transparent bg-primary px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-primary focus:outline-none focus:ring-2 focus:bg-primary focus:ring-offset-2 focus:ring-offset-gray-50">Buy
                                It Now
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>



    <?php
    include 'komponen/footer.php';
    ?>