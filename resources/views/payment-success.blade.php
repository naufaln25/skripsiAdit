<x-app-layout>
    <x-navbar></x-navbar>

    <section class="sect-venue bg-primary">
        <div class="container">
          <div class="text-title text-center">
            <h1 class="text-white">Selamat pembayaran sudah berhasil !</h1>
          </div>
          <img src="../../img/payment-success.svg" style="max-width: 40%" class="img-fluid d-block mx-auto mb-5" alt="success" />
          <p class="text-muted text-center mb-5">We will inform you via email later once transaction has been accepted</p>
          <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-danger btn-submit" href="{{route('home')}}" role="button">Kembali ke halaman utama</a>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#3a4f50"" fill-opacity="1" d="M0,256L120,240C240,224,480,192,720,197.3C960,203,1200,245,1320,266.7L1440,288L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>
      </section>

    <x-footer></x-footer>
</x-app-layout>
