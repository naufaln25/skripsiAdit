<x-app-layout>
    <div class="login-page">
        <div class="row g-0">
          <div class="col-md-7 bg-primary">
            <nav class="navbar navbar-dark bg-primary ms-5">
              <div class="container py-4">
                <a class="navbar-brand d-flex" href="{{route('home')}}">
                  <img src="../../img/CGV_logo.svg" alt="" width="60" height="24" class="d-inline-block align-text-top" />
                  <p class="fw-bold">Arena</p>
                </a>
              </div>
            </nav>
            <div class="login-form">
              <h2 class="text-white mb-3 fw-bold">Sign In</h2>
              <p class="mb-5 text-muted desc">Silahkan Login ke Akun Anda</p>
              <form action="">
                <div class="mb-5">
                  <input type="text" class="form-control form-log" id="username" placeholder="Username" />
                  <span class="form-focus"></span>
                </div>
                <div class="mb-4">
                  <input type="password" class="form-control form-log" id="password" placeholder="******" />
                  <span class="form-focus"></span>
                </div>
                <div class="mb-5 text-end">
                  <a href="#" class="fw-bold link-password">Lupa Password ?</a>
                </div>
                <div class="d-grid gap-2 mb-5">
                  <a class="btn btn-danger btn-submit" href="#" role="button">Sign In</a>
                </div>
                <div class="mb-3 text-center">
                  <p class="text-white">Belum Punya Akun ? <a href="../pages/signup.html" class="text-danger"> Daftar Sekarang</a></p>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-5">
            <img src="../../img/login-cover.jpg" alt="" class="img-fluid img-cover" />
          </div>
        </div>
      </div>
      <script src="/public/assets/js/min.js"></script>
</x-app-layout>
