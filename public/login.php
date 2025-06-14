<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Emery.com</title>

  <!-- Style Tailwind -->
  <link rel="stylesheet" href="css/style-tailwind.css" />

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
                  <a href="index.php"><img class="h-14 w-auto" src="/asset/img/image.png" alt="Logo" /></a>
                </div>

                <!-- Logo Mobile  -->
                <div class="flex flex-1 items-center justify-start lg:hidden">
                  <a href="index.php">
                    <img src="/asset/img/image.png" class="h-12 w-auto" alt="Logo" />
                  </a>
                </div>

                <!-- Menu -->
                <div class="flex flex-1 items-center justify-end">
                  <div class="flex items-center lg:ml-8">
                    <div class="flex space-x-8">
                      <div class="flex">
                        <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Account</span>
                          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
    </div>
  </header>

  <!-- Login dan Register -->
  <section class="min-h-screen w-full flex items-center justify-center bg-white px-4 ">
    <div id="signInForm" class="w-full max-w-md p-8 mt-16">
      <h2 class="text-2xl font-medium text-font_jingga mb-6">Sign in to your account</h2>
      <div class="mt-10">
        <div>
          <form action="#" method="POST" class="space-y-6">
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-font_primary">Email
                address</label>
              <div class="mt-2">
                <input id="email" name="email" autocomplete="email" required
                  class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  focus:ring-primary sm:text-sm sm:leading-6">
              </div>
            </div>

            <div>
              <label for="password" class="block text-sm font-medium leading-6 text-font_primary">Password</label>
              <div class="mt-2">
                <input id="password" name="password" autocomplete="current-password" required
                  class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
              </div>
            </div>

            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox"
                  class="h-4 w-4 rounded border-gray-300 text-font_jingga focus:ring-primary">
                <label for="remember-me" class="ml-3 block text-sm leading-6 text-font_primary">Remember
                  me</label>
              </div>

              <div class="text-sm leading-6">
                <a href="#" class="font-semibold text-font_jingga">Forgot password?</a>
              </div>
            </div>

            <div>
              <button type="submit"
                class="flex w-full justify-center rounded-md bg-primary px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                in</button>
            </div>

            <div>
              <p class="mt-2 text-sm leading-6 text-gray-500">
                Don't have an account?
                <a href="#" id="showRegister" class="font-semibold text-font_jingga">Creat one</a>
              </p>
            </div>
          </form>

        </div>
      </div>
    </div>
    <div id="registerForm" class="hidden w-full max-w-md p-8 mt-20 mb-6">
      <h2 class="text-2xl font-medium text-font_jingga mb-6">Register to your account</h2>
      <div class="mt-10">
        <div>
          <form action="#" method="POST" class="space-y-6">
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-font_primary">Email
                address</label>
              <div class="mt-2">
                <input id="email" name="email" autocomplete="email" required
                  class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  focus:ring-primary sm:text-sm sm:leading-6">
              </div>
            </div>

            <div>
              <label for="password" class="block text-sm font-medium leading-6 text-font_primary">Password</label>
              <div class="mt-2">
                <input id="password" name="password" autocomplete="current-password" required
                  class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
              </div>
            </div>

            <div>
              <label for="password" class="block text-sm font-medium leading-6 text-font_primary">Confirm
                Password</label>
              <div class="mt-2">
                <input id="con-password" name="con-password" autocomplete="current-password" required
                  class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
              </div>
            </div>

            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox"
                  class="h-4 w-4 rounded border-gray-300 text-font_jingga focus:ring-primary">
                <label for="remember-me" class="ml-3 block text-sm leading-6 text-font_primary">Remember
                  me</label>
              </div>
            </div>

            <div>
              <button type="submit"
                class="flex w-full justify-center rounded-md bg-primary px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                in</button>
            </div>

            <div>
              <p class="mt-2 text-sm leading-6 text-gray-500">
                Already have an account?
                <a href="#" id="showSignIn" class="font-semibold text-font_jingga">Sig in</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="bg-secondary" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16  lg:px-8 lg:pt-16">
      <div class="xl:grid xl:grid-cols-[40%_60%] xl:gap-2">
        <div class="space-y-4">
          <img class="h-16" src="/asset/img/image.png" alt="Company name">
          <p class="text-base leading-6 text-font_primary">Making the world a better place through
            constructing elegant hierarchies.</p>
          <div class="flex space-x-6">
            <a href="#" class="text-gray-500 hover:text-gray-400">
              <span class="sr-only">Facebook</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-400">
              <span class="sr-only">Instagram</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-400">
              <span class="sr-only">X</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
              </svg>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-400">
              <span class="sr-only">GitHub</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-400">
              <span class="sr-only">YouTube</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                  clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
        <div class="pt-8 mt-16 grid grid-cols-2 md:grid-cols-4 gap-10  xl:mt-0 xl:col-span-2">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-medium leading-6 text-font_primary whitespace-nowrap">METODE
                PENGIRIMAN</h3>
              <ul role="list" class="mt-5 space-y-4">
                <li class="cursor-pointer hover:opacity-80 transition duration-200">
                  <img class="h-12 md:h-14" src="/asset/img/asset-footer/JNE.png" alt="Company name">
                </li>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-medium leading-6 text-font_primary whitespace-nowrap">METODE
                PEMBAYARAN</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li class="cursor-pointer hover:opacity-80 transition duration-200">
                  <img class="h-12 md:h-16" src="/asset/img/asset-footer/MANDIRI.png" alt="Company name">
                </li>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-medium leading-6 text-font_primary whitespace-nowrap">INFORMASI</h3>
              <ul role="list" class="mt-3 space-y-4">
                <li>
                  <a href="#" class="text-sm leading-4 text-font_primary hover:text-white">Marketing</a>
                </li>
                <li>
                  <a href="#" class="text-sm leading-4 text-font_primary hover:text-white">Marketing</a>
                </li>
                <li>
                  <a href="#" class="text-sm leading-4 text-font_primary hover:text-white">Marketing</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="md:grid  md:gap-8">
            <div>
              <h3 class="text-sm font-medium leading-6 text-font_primary whitespace-nowrap">NEWSLETTER
              </h3>
              <ul role="list" class="mt-3 space-y-4">
                <li>
                  <p class="text-sm leading-6 text-font_primary">Making the world a better place
                    through constructing elegant hierarchies.</p>
                  <form class="mt-3 max-w-md mx-autorounded ">
                    <div class="mb-4">
                      <input type="text" id="name" name="name" placeholder="Email"
                        class="mt-1 block w-full text-sm px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                      <button class="px-6 py-2 bg-primary text-white rounded text-sm font-medium transition">
                        Subscribe
                      </button>
                    </div>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24">
        <p class="md:text-base leading-5 text-font_primary">&copy; 2020 Your Company, Inc. All rights reserved.
        </p>
      </div>
    </div>
  </footer>

  <script src="./js/main.js" defer></script>
  <script src="./js/registersigin.js"></script>


  </script>
</body>

</html>