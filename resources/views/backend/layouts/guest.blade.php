<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Eden Spell</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=cinzel:700|figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .eden-bg {
                background: radial-gradient(circle, #1a0505 0%, #000000 100%);
            }
            .logo-text {
                font-family: 'Cinzel', serif;
                text-shadow: 0 0 15px rgba(239, 68, 68, 0.6);
            }
        </style>
    </head>
    <body class="font-sans text-gray-200 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 eden-bg">
            <div class="mb-4 transform hover:scale-110 transition duration-500">
                <a href="/" class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-red-900 border-2 border-red-600 rounded-full flex items-center justify-center shadow-[0_0_30px_rgba(153,27,27,0.8)]">
                        <span class="text-white text-4xl font-bold logo-text">E</span>
                    </div>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>