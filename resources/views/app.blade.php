<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.header')
    </head>
    <body>

        {{-- Navbar --}}
        @include('layouts.navbar')

        {{-- Content --}}
        <main>
            @yield('content[body]')
        </main>

        {{-- Footer --}}
        @include('layouts.footer')
    </body>
</html>