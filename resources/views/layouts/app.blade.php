<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Green Rest') }}</title>

    @include('layouts.brand-styles')
    <style>
        body {
            background: #f6faf8;
        }
        .app-shell {
            min-height: 100vh;
        }
        .page-content {
            padding: 28px 0 40px;
        }
        .app-header {
            margin-bottom: 18px;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="app-shell">
        @include('layouts.navigation')

        @isset($header)
            <header class="app-header page-container">
                {{ $header }}
            </header>
        @endisset

        <main class="page-container page-content">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
