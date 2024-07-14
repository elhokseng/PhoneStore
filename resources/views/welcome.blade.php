<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <header class="bg-white border-b border-gray-200 dark:bg-gray-900">
            <nav class="bg-white border-gray-200 dark:bg-gray-900 w-full">
                <div class="flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">    
                        <img src="logo/phonestore_logo.webp" class="h-8" alt="PhoneStore Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Mobile store</span>
                    </a>
                    <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                        <div class="px-12">
                            @if (Route::has('login'))
                                <nav class="flex items-center space-x-4">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-gray-900 dark:text-white">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-gray-900 dark:text-white">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="text-gray-900 dark:text-white">Register</a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                        </div>
                        <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-5 h-5 rounded-full me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                                <path fill="#b22234" d="M0 0h7410v3900H0z"/>
                                <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff" stroke-width="300"/>
                                <path fill="#3c3b6e" d="M0 0h2964v2100H0z"/>
                                <g fill="#fff">
                                    <g id="d">
                                        <g id="c">
                                            <g id="e">
                                                <g id="b">
                                                    <path id="a" d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"/>
                                                    <use xlink:href="#a" y="420"/>
                                                    <use xlink:href="#a" y="840"/>
                                                    <use xlink:href="#a" y="1260"/>
                                                </g>
                                                <use xlink:href="#a" y="1680"/>
                                            </g>
                                            <use xlink:href="#b" x="247" y="210"/>
                                        </g>
                                        <use xlink:href="#c" x="494"/>
                                    </g>
                                    <use xlink:href="#d" x="988"/>
                                    <use xlink:href="#c" x="1976"/>
                                    <use xlink:href="#e" x="2470"/>
                                </g>
                            </svg>
                            English (US)
                        </button>
                        <!-- Dropdown -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700" id="language-dropdown-menu">
                            <ul class="py-2 font-medium" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                        <div class="inline-flex items-center">
                                            <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480">
                                                <rect width="640" height="480" fill="#032ea1"/>
                                                <rect y="160" width="640" height="160" fill="#d21034"/>
                                                <path fill="#fff" d="M320 178.6l-12.6 8.6V206h8.6v-11h8.2v11h8.6v-18.8l-12.6-8.6zm0 9.6l7.2 4.8V206h-14.4v-13zM304 186.5l-12.6 8.6V206h8.6v-11h8.2v11h8.6v-18.8l-12.6-8.6zm0 9.6l7.2 4.8V206h-14.4v-13zM336 186.5l-12.6 8.6V206h8.6v-11h8.2v11h8.6v-18.8l-12.6-8.6zm0 9.6l7.2 4.8V206h-14.4v-13zM296 200h48v8h-48zM292 208h56v16h-56zM292 224h56v8h-56zM304 232h32v8h-32z"/>
                                            </svg>
                                            Khmer (KH)
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-language" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                            </svg>
                        </button>
                    </div>
                    <div class="items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-language">
                        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </body>
</html>
