<nav class="navbar navbar-expand-lg bg-body-tertiary shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">
      <img src="{{asset('image/oxford-logo.jpg')}}" alt="oxford-logo" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{Request::is('/') ? 'active' : ''}}" aria-current="page" href="{{url('/')}}" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('admission') ? 'active' : ''}}" href="{{url('admission')}}">Admission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('notice-board') ? 'active' : ''}}" href="{{url('notice-board')}}">NoticeBoard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('about-us') ? 'active' : ''}}" href="{{url('about-us')}}">AboutUs</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link {{Request::is('home') ? 'active' : ''}}" href="{{url('home')}}">Dashboard</a>
        </li>
        @endauth
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> --}}
      </ul>
      <div>
        @auth
        <a href="{{route('logout')}}" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
            @else
            <a href="{{route('login')}}" class="btn-main">Login</a>
        @endauth
       
      </div>
    </div>
  </div>
</nav>
<style>
  .nav-link.active{
    color: #f0498c !important;
    font-weight: 600;
    letter-spacing: 1px
  }
  .nav-link:hover{
    color: #f0498c !important;

  }
</style>