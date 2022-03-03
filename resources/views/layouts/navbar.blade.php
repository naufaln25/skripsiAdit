<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top menu py-4">
    <div class="container">
      <a class="navbar-brand logo" href="{{route('home')}}">CGV Arena</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
            @foreach ($navbar as $name => $url)
              <li class="nav-item">
                <a class="nav-link" href="{{$url}}">{{$name}}</a>
              </li>
            @endforeach
        </ul>
        @auth
        <div class="d-flex nav-item dropdown no-arrow user-logged btn-log">
            <a href="#" class="nav-link username" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Halo, {{Auth::user()->name}} !
                <img src="{{Auth::user()->avatar}}" class="avatar">
            </a>
            <ul class="dropdown-menu dropdown-menu-dark dropmenu mt-3" aria-labelledby="dropdownMenuLink" style="right: 0; left:auto">
                <li>
                    <a href="{{route('dashboard')}}" class="dropdown-item dropitem">My Dashboard</a>
                </li>
                <li>
                    <a href="#" class="dropdown-item dropitem" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </li>
            </ul>
        </div>
        @else
        <div class="d-flex align-items-center">
            <a href="{{route('login')}}" class="nav-link link-white me-2">Sign In</a>
            <a href="{{route('signup')}}" class="btn btn-outline-danger btn-rounded">Daftar Sekarang</a>
          </div>
        @endauth
      </div>
    </div>
  </nav>
