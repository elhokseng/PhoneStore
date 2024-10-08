<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
            <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Include the Navbar -->
            <x-navbar />
            <!-- Page Content -->
            <main>
                <div class="container mx-auto">
                    <!-- Your welcome page content here -->
                    <h1 class="text-center text-success">welcome <span class="text-green-500"> {{ Auth::user()->name ?? '' }}</span></h1>
                </div>
            </main>
        </div>
    </body>
</html>
