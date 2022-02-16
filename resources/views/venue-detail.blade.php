<x-app-layout>
    <x-navbar></x-navbar>
    <section class="venue-detail">
        <div id="imageVenue" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../img/basketballcourt.jpg" class="d-block w-100 img-fluid image-carousel" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="../../img/basketballcourt2.jpg" class="d-block w-100 img-fluid image-carousel" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="../../img/basketballcourt3.jpg" class="d-block w-100 img-fluid image-carousel" alt="..." />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#imageVenue" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#imageVenue" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="container">
          <div class="description bg-secondary">
            <div class="row">
              <div class="col-md-7">
                <h1 class="desc-title text-white">Basketball Hall</h1>
                <p class="desc-loc text-muted mb-4">CGV Teras Kota</p>
                <p class="desc-text text-white">
                  Tempat terbaik untuk berlatih bersama tim basketmu. Lapangan basket ini dilengkapi dengan fasilitas yang terbaik dan lengkap sehingga dapat menunjang tim kamu untuk berlatih dengan baik dan maksimal. Kamu juga dapat
                  melakukan pertandingan atau sparing bersama lawanmu.
                </p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-4">
                <h4 class="text-light fw-bold mb-3">Rp. 150.000 / <small class="text-muted">Jam</small></h4>
                <form action="">
                  <div class="mb-3">
                    <label for="jamSewa" class="form-label text-white">Jam Sewa</label>
                    <div class="input-group mb-3">
                        <input type="text" id="timepicker" class="form-control" placeholder="Pilih Jam Sewa" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-clock    "></i></span>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="jamSewa" class="form-label text-white">Durasi Sewa</label>
                    <input type="email" class="form-control" id="jamSewa" aria-describedby="emailHelp" />
                  </div>
                  <div class="mb-4">
                    <label for="tanggal" class="form-label text-white">Pilih Tanggal</label>
                    <div class="input-group">
                        <input type="text" id="datetimepicker" class="form-control" placeholder="15-02-2022" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-calendar"></i></span>
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6">
                      <p class="text-white total">Total Bayar</p>
                    </div>
                    <div class="col-md-6">
                      <p class="text-end text-white price">Rp.300.000</p>
                    </div>
                  </div>
                  <div class="d-grid gap-2">
                    <a class="btn btn-danger btn-submit" href="{{route('payment')}}" role="button">Lanjutkan Pembayaran</a>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="review-venue">
            <h3 class="text-center text-white fw-bold mb-5">Review dari Pengguna</h3>
            <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-around">
              <div class="card-review card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-review--img" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title card-review--name">Mega Yuliana</h5>
                  <p class="card-text card-review--job mb-5">Basketball Player</p>
                  <p class="card-text card-review--comment mb-2">"Really good. You guys rock! Arena has got everything I need. It's exactly what I've been looking for."</p>
                </div>
              </div>

              <div class="card-review card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-review--img" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title card-review--name">Mega Yuliana</h5>
                  <p class="card-text card-review--job mb-5">Basketball Player</p>
                  <p class="card-text card-review--comment mb-2">"Really good. You guys rock! Arena has got everything I need. It's exactly what I've been looking for."</p>
                </div>
              </div>

              <div class="card-review card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-review--img" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title card-review--name">Mega Yuliana</h5>
                  <p class="card-text card-review--job mb-5">Basketball Player</p>
                  <p class="card-text card-review--comment mb-2">"Really good. You guys rock! Arena has got everything I need. It's exactly what I've been looking for."</p>
                </div>
              </div>

              <div class="card-review card-item text-center text-white" style="width: 18rem">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-review--img" alt="basketball court" />
                <div class="card-body">
                  <h5 class="card-title card-review--name">Mega Yuliana</h5>
                  <p class="card-text card-review--job mb-5">Basketball Player</p>
                  <p class="card-text card-review--comment mb-2">"Really good. You guys rock! Arena has got everything I need. It's exactly what I've been looking for."</p>
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

      <script type="text/javascript">
          $(function(){
              $('#datetimepicker').datetimepicker({
                  timepicker:false,
                  format: 'd-m-Y'
              });
          });

          $(function(){
              $('#timepicker').datetimepicker({
                  datepicker:false,
                  format: 'H:i'
              });
          });
      </script>
</x-app-layout>
