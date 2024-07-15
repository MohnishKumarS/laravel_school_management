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
    <main class="page-wrapper">
        <div class="row">
            <div class="col-lg-3 col-xxl-2">
              <div class="left-section">
                <aside>
                    <p> Menu </p>
                    <a href="javascript:void(0)">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Home
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Banners
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-clone" aria-hidden="true"></i>
                        Latest News
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        Quotes
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        Standards/classes
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        Teachers
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        Students
                    </a>
                </aside>
              </div>
            </div>
            <div class="col-lg-8 col-xxl-6">
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
