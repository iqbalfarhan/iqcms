<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/app.css')
    </head>

    <body>
        @guest
            @if (Route::is('login'))
                <div class="flex justify-center items-center min-h-screen">
                    {{ $slot }}
                </div>
            @else
                {{ $slot }}
            @endif
        @endguest

        @auth
            <div class="drawer lg:drawer-open">
                <input id="drawer" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    @livewire('partial.navbar')
                    {{ $slot }}
                </div>
                <div class="drawer-side">
                    <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                    @livewire('partial.sidebar')
                </div>
            </div>

        @endauth
    </body>

</html>
