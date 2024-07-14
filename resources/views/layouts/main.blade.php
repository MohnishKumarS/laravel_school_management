<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oxford School Management</title>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- link css lib --}}
    @include('lib.css')

    @stack('styles')
</head>

<body>

    {{-- Navbar --}}
    @include('nav')

    {{-- content section --}}
    <main class="page-wrapper">
        @yield('content')
    </main>

    {{-- footer --}}

    {{-- link js lib --}}
    @include('lib.js')

    @stack('scripts')
</body>

</html>
