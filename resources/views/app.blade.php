<!DOCTYPE html>
<html lang="en">
    <head>
        @include('components.header')
    </head>
    <body>

        {{-- Navbar --}}
        @include('components.navbar')

        {{-- Content --}}
        <main>
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('components.footer')
    </body>
</html>