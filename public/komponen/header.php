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
    <link rel="stylesheet" href="../src/css/input.css" />

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

<body class="font-poppins bg-white">
    <template id="nav-menu-template">
        <div class="space-y-4 lg:flex lg:space-x-6 lg:space-y-0 items-center">
            <a href="index.php" class="block font-medium text-sm text-font_primary hover:text-primary">BERANDA</a>
            <a href="#" class="block font-medium text-sm text-font_primary hover:text-primary">PHASMINA</a>
            <a href="#" class="block font-medium text-sm text-font_primary hover:text-primary">INSTAN</a>
            <a href="#" class="block font-medium text-sm text-font_primary hover:text-primary">BERGO</a>
            <a href="#" class="block font-medium text-sm text-font_primary hover:text-primary">SYAR'I</a>
            <!-- Dropdown Menu -->
            <div class="group relative w-full lg:inline-block">
                <button onclick="toggleDropdown('companyDropdown', 'companyIcon')"
                    class="nav-item font-medium text-sm text-font_primary hover:text-primary w-full text-left flex justify-between items-center lg:w-auto">
                    KATEGORI
                    <svg id="companyIcon" class="w-4 h-4 ml-2 transition-transform duration-200 lg:hidden" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="companyDropdown"
                    class="hidden lg:group-hover:block lg:absolute lg:left-0 lg:top-full bg-white lg:shadow-md lg:w-48 z-10">
                    <a href="#" class="block px-4 py-2 text-xs text-font_primary hover:bg-tertiary">PREMIUM</a>
                    <a href="#" class="block px-4 py-2 text-xs text-font_primary hover:bg-tertiary">MEDIUM</a>
                    <a href="#" class="block px-4 py-2 text-xs text-font_primary hover:bg-tertiary">SUPER PREMIUM</a>
                </div>
            </div>
            <div class="group relative w-full lg:inline-block">
                <button onclick="toggleDropdown('companyDropdown1', 'companyIcon1')"
                    class="nav-item font-medium text-sm text-font_primary hover:text-primary w-full text-left flex justify-between items-center lg:w-auto">
                    APPAREL
                    <svg id="companyIcon1" class="w-4 h-4 ml-2 transition-transform duration-200 lg:hidden" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Ini dia: muncul saat hover di desktop dan toggle di mobile -->
                <div id="companyDropdown1"
                    class="hidden lg:group-hover:block lg:absolute lg:left-0 lg:top-full bg-white lg:shadow-md lg:w-48 z-10">
                    <a href="#" class="block px-4 py-2 text-xs text-font_primary hover:bg-tertiary">PREMIUM</a>
                    <a href="#" class="block px-4 py-2 text-xs text-font_primary hover:bg-tertiary">MEDIUM</a>
                    <a href="#" class="block px-4 py-2 text-xs text-font_primary hover:bg-tertiary">SUPER PREMIUM</a>
                </div>
            </div>
        </div>
    </template>

    <!-- Navbar -->
    <header class="fixed top-0 z-50 left-0 w-full shadow">
        <div class="bg-white">
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="relative z-40 lg:hidden hidden" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

                <div class="fixed inset-0 z-40 flex">
                    <d class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
                        <div class="flex px-4 pb-2 pt-5">
                            <button id="mobile-menu-close" type="button"
                                class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <!-- menu mobile -->
                        <div id="mobile-nav"
                            class="lg:hidden flex flex-col space-y-4 border-t border-gray-200 px-4 py-6"></div>
                </div>
            </div>

            <!-- Navigation -->
            <header class="relative sticky top-0">
                <nav aria-label="Top">
                    <!-- Top bar -->
                    <div class="bg-secondary hidden lg:block">
                        <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                            <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:space-x-6">
                                <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an
                                    account</a>
                                <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
                                <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
                            </div>
                        </div>
                    </div>

                    <!-- Main Nav -->
                    <div class="bg-white border-b border-gray-200">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <div class="flex h-16 items-center justify-between">
                                <!-- Logo Desktop -->
                                <div class="hidden lg:flex lg:items-center">
                                    <a href="#"><img class="h-14 w-auto" src="/asset/img/image.png" alt="Logo" /></a>
                                </div>

                                <!-- Menu desktop -->
                                <div class="hidden lg:flex lg:space-x-8" id="desktop-nav">
                                    <div class="ml-8">
                                        <div class="flex h-full justify-center space-x-8"></div>
                                    </div>
                                </div>

                                <!-- Mobile Menu & Search -->
                                <div class="flex pr-5 items-center lg:hidden">
                                    <button id="mobile-menu-open" type="button"
                                        class="-ml-2 rounded-md bg-white p-2 text-gray-400">
                                        <span class="sr-only">Open menu</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Logo Mobile  -->
                                <div class="flex flex-1 items-center justify-start lg:hidden">
                                    <a href="#">
                                        <img src="/asset/img/image.png" class="h-12 w-auto" alt="Logo" />
                                    </a>
                                </div>

                                <!-- Menu -->
                                <div class="flex flex-1 items-center justify-end">
                                    <div class="flex items-center lg:ml-8">
                                        <div class="flex space-x-4 lg:space-x-8">
                                            <div class="flex">
                                                <a id="toggleSearchBar" href="#"
                                                    class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">Search</span>
                                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="flex">
                                                <a href="./login.php"
                                                    class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">Account</span>
                                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>

                                        <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>

                                        <!-- Keranjang -->
                                        <div class="flow-root">
                                            <a href="javascript:void(0)" id="cart-button"
                                                class="group -m-2 flex items-center p-2">
                                                <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                </svg>
                                                <span
                                                    class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                                <span class="sr-only">items in cart, view bag</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- Dropdown Search Full Width -->
            <div id="searchBar" class="hidden w-full bg-white border-t border-gray-200 shadow z-40">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
                    <div class="flex items-center gap-3 flex-grow">
                        <svg class="h-6 w-6 md:h-8 md:w-8 text-gray-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-5.2-5.2m0 0a7.5 7.5 0 10-10.6-10.6 7.5 7.5 0 0010.6 10.6z" />
                        </svg>
                        <input type="text" placeholder="SEARCH FOR..."
                            class="w-full px-3 py-2 text-gray-700 border-none focus:outline-none focus:ring-0 text-sm" />
                    </div>
                    <button id="closeSearchBar"
                        class="text-font_primary hover:text-primary text-xl md:text-3xl">&times;</button>
                </div>
            </div>
        </div>
    </header>