<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Eden Spell') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=cinzel:700|figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* Eden Spell Main Theme Styles */
            body {
                background-color: #050505;
                color: #e5e7eb;
            }
            .eden-header {
                background: linear-gradient(to right, #000000, #1a0505, #000000);
                border-bottom: 2px solid #7f1d1d;
                box-shadow: 0 4px 15px rgba(127, 29, 29, 0.4);
            }
            .eden-content-area {
                background: radial-gradient(circle at top, #111111 0%, #000000 100%);
                min-height: calc(100vh - 64px);
            }
            .header-title {
                font-family: 'Cinzel', serif;
                color: #ef4444;
                letter-spacing: 2px;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen eden-content-area">
            <div class="eden-header">
                @include('layouts.navigation')
            </div>

            @isset($header)
                <header class="bg-transparent">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <div class="border-l-4 border-red-600 pl-4">
                            <h2 class="font-semibold text-xl text-gray-200 leading-tight header-title">
                                {{ $header }}
                            </h2>
                        </div>
                    </div>
                </header>
            @endisset

            <main>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
                     {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>