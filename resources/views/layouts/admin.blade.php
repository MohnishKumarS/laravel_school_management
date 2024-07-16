<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oxford Dashboard</title>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- link css lib --}}
    @include('lib.css')

    @stack('styles')
</head>

<body>
    <div class="top-space"></div>
    {{-- Navbar --}}
    @include('nav')

    {{-- content section --}}
    <main class="page-dashboard">
        <div class="row">
            <div class="col-lg-3 col-xxl-2">
              <div class="left-section d-none d-lg-block">
                <aside>
                    <p class="fw-bold"> OXFORD MANAGEMENT </p>
                    <a href="{{url('/')}}" class="{{Request::is('home') ? 'active' : ''}}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Home
                    </a>
                    <a href="{{url('banners')}}" class="{{Request::is('banners') ? 'active' : ''}}">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Banners
                    </a>
                    <a href="{{url('/news')}}" class="{{Request::is('news') ? 'active' : ''}}">
                        <i class="fa-solid fa-newspaper"></i>
                        Latest News
                    </a>
                    <a href="{{url('/quotes')}}" class="{{Request::is('quotes') ? 'active' : ''}}">
                        <i class="fa-solid fa-quote-left"></i>
                        Quotes
                    </a>
                    <a href="{{url('/standard')}}" class="{{Request::is('standard') ? 'active' : ''}}">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        Std/classes
                    </a>
                    <a href="{{url('/teachers')}}" class="{{Request::is('teachers') ? 'active' : ''}}">
                        <i class="fa-solid fa-person-chalkboard"></i>
                        Teachers
                    </a>
                    <a href="{{url('/students')}}" class="{{Request::is('students') ? 'active' : ''}}">
                        <i class="fa-solid fa-children"></i>
                        Students
                    </a>
                </aside>
              </div>
            </div>
            <div class="col-lg-8 col-xxl-8">
                <div class="right-section">
                    @yield('content')
                </div>
            </div>
        </div>
       
    </main>

    {{-- footer --}}

    {{-- link js lib --}}
    @include('lib.js')

    @stack('scripts')

    
</body>

</html>
