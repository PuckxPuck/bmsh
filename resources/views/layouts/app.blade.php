<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body>
        @include('layouts.navigation')
        <main class="mb-10 mt-[130px]">
            @yield('contents')
        </main>
        @include('layouts.footer')
        @livewireScripts
        <script src="https://unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>
        <script>
            function copyText(elementID) {
              var copyText = document.getElementById(elementID);
              copyText.select();
              copyText.setSelectionRange(0, 99999);
              navigator.clipboard.writeText(copyText.value);
            }
            </script>
    </body>
</html>
