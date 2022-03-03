<x-app-layout>
    <x-navbar></x-navbar>
    <section class="intro-section">
        <div class="container">
          <div class="row align-items-center text-white">
            <div class="col-md-6">
              <h1 class="display-2">
                <span class="display-2--intro">Enjoy your time. Find best place for entertainment & sports.</span>
                <span class="display-2--description lh-lg">We provide what you need to enjoy your quality time with family & friends</span>
                <a href="#section2" class="btn btn-danger btn-rounded-intro" >
                  Get Started
                  <span>
                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                  </span>
                </a>
              </h1>
              <div class="feature d-flex justify-content-between my-4 me-5">
                <div class="d-flex">
                  <i class="fas fa-calendar-check me-1"></i>
                  <p>Easy Booking</p>
                </div>
                <div class="d-flex">
                  <i class="fas fa-user-edit me-1"></i>
                  <p>Best Services</p>
                </div>
                <div class="d-flex">
                  <i class="fas fa-tasks me-1"></i>
                  <p>Best Facilities</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 text-end position-relative">
              <img src="../img/intro-section.png" class="img-fluid text-end" style="max-width: 90%" />
            </div>
          </div>
        </div>
      </section>

      <section class="section-2" id="section2">
        <div class="container">
          <div class="sect-2-title text-center">
            <h1 class="text-white">Pilih Tempat Terbaikmu</h1>
            <p>Pilih tempat terbaik untuk menikmati liburan bersama keluarga dan teman</p>
          </div>
          <div class="sect-2-item">
            <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-around">
              <div class="card card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-item-img mb-3" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title mb-3">Gold Class Theater</h5>
                  <p class="card-text fw-bold mb-4">Rp. 150.000 / <small class="text-muted">hour</small></p>
                  <div class="d-grid gap-2 mb-1">
                    <a href="{{route('venue-detail.create', 'goldenclass-theather')}}" class="btn btn-danger btn-small">Pesan Sekarang</a>
                  </div>
                </div>
              </div>

              <div class="card card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-item-img mb-3" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title mb-3">Silver Class Theater</h5>
                  <p class="card-text fw-bold mb-4">Rp. 150.000 / <small class="text-muted">hour</small></p>
                  <div class="d-grid gap-2 mb-1">
                    <a href="{{route('venue-detail.create', 'silverclass-theater')}}" class="btn btn-danger btn-small">Pesan Sekarang</a>
                  </div>
                </div>
              </div>

              <div class="card card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-item-img mb-3" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title mb-3">Basketball Hall</h5>
                  <p class="card-text fw-bold mb-4">Rp. 150.000 / <small class="text-muted">hour</small></p>
                  <div class="d-grid gap-2 mb-1">
                    <a href="{{route('venue-detail.create', 'basketball-hall')}}" class="btn btn-danger btn-small">Pesan Sekarang</a>
                  </div>
                </div>
              </div>

              <div class="card card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-item-img mb-3" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title mb-3">Billiard Venue</h5>
                  <p class="card-text fw-bold mb-4">Rp. 150.000 / <small class="text-muted">hour</small></p>
                  <div class="d-grid gap-2 mb-1">
                    <a href="{{route('venue-detail.create', 'billiard-venue')}}" class="btn btn-danger btn-small">Pesan Sekarang</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="reason bg-primary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-white pt-2 pb-4">
              <h1 class="sect-3-title mb-5">Kenapa memilih kami ?</h1>
              <div class="sect-3-item mb-4">
                <div class="sect-item d-flex">
                  <div class="badge bg-secondary text-wrap icon d-flex align-items-center justify-content-center me-3">
                    <i class="fas fa-calendar-check me-1"></i>
                  </div>
                  <span class="text">
                    <h1 class="text--title">Pemesanan Mudah</h1>
                    <p class="text--description text-muted lh-base">Lakukan pemesanan dengan mudah dan cepat di gadget anda hanya dengan sekali klik.</p>
                  </span>
                </div>
              </div>

              <div class="sect-3-item mb-4">
                <div class="sect-item d-flex">
                  <div class="badge bg-secondary text-wrap icon d-flex align-items-center justify-content-center me-3">
                    <i class="fas fa-calendar-check me-1"></i>
                  </div>
                  <span class="text">
                    <h1 class="text--title">Pelayanan Terbaik</h1>
                    <p class="text--description text-muted lh-base">Lakukan pemesanan dengan mudah dan cepat di gadget anda hanya dengan sekali klik.</p>
                  </span>
                </div>
              </div>

              <div class="sect-3-item mb-4">
                <div class="sect-item d-flex">
                  <div class="badge bg-secondary text-wrap icon d-flex align-items-center justify-content-center me-3">
                    <i class="fas fa-calendar-check me-1"></i>
                  </div>
                  <span class="text">
                    <h1 class="text--title">Fasilitas Terbaik</h1>
                    <p class="text--description text-muted lh-base">Lakukan pemesanan dengan mudah dan cepat di gadget anda hanya dengan sekali klik.</p>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-6 text-end">
              <img src="../../img/section-3.png" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>

      <section class="sect-4">
        <div class="container">
          <div class="sect-4-title text-center">
            <h1 class="text-white">Apa yang dikatakan oleh pelanggan kami ?</h1>
            <p>Beberapa testimonial dari pelanggan yang sudah menikmati arena dan teater</p>
          </div>
          <div class="sect-4-item">
            <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-around">
              <div class="card-review card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-review--img" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title card-review--name">Mega Yuliana</h5>
                  <p class="card-text card-review--job">Basketball Player</p>
                  <p class="card-text card-review--comment">"Really good. You guys rock! Arena has got everything I need. It's exactly what I've been looking for."</p>
                </div>
              </div>

              <div class="card-review card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-review--img" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title card-review--name">Mega Yuliana</h5>
                  <p class="card-text card-review--job">Basketball Player</p>
                  <p class="card-text card-review--comment">"Really good. You guys rock! Arena has got everything I need. It's exactly what I've been looking for."</p>
                </div>
              </div>

              <div class="card-review card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-review--img" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title card-review--name">Mega Yuliana</h5>
                  <p class="card-text card-review--job">Basketball Player</p>
                  <p class="card-text card-review--comment">"Really good. You guys rock! Arena has got everything I need. It's exactly what I've been looking for."</p>
                </div>
              </div>

              <div class="card-review card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-review--img" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title card-review--name">Mega Yuliana</h5>
                  <p class="card-text card-review--job">Basketball Player</p>
                  <p class="card-text card-review--comment">"Really good. You guys rock! Arena has got everything I need. It's exactly what I've been looking for."</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#3a4f50" fill-opacity="1" d="M0,256L120,240C240,224,480,192,720,197.3C960,203,1200,245,1320,266.7L1440,288L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>
      </section>
      <x-footer></x-footer>
</x-app-layout>
