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
        <div class="d-flex align-items-center">
          <a href="{{route('signin')}}" class="nav-link link-white me-2">Sign In</a>
          <a href="{{route('signup')}}" class="btn btn-outline-danger btn-rounded">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </nav>
