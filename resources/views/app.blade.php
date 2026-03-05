<!DOCTYPE html>
<html lang="en">
    <head>
        @include('components.header')
    </head>
    <body class="d-flex flex-column min-vh-100">
        {{-- Navbar --}}
        @include('components.navbar')

        {{-- Content --}}
        <main class="flex-fill">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('components.footer')
    </body>
</html>