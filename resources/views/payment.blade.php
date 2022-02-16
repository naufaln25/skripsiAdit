<x-app-layout>
    <x-navbar></x-navbar>

      <section class="payment bg-primary">
        <div class="container">
          <div class="text-title text-center">
            <h1 class="text-white mb-3">Pembayaran</h1>
            <p>Lanjutkan ke pembayaran dengan memilih metode pembayaran yang telah disediakan</p>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="card card-payment mb-5">
                <img src="../../img/basketballcourt.jpg" class="card-img-top card-payment--image" alt="..." />
                <div class="card-body mx-2 my-2">
                  <p class="card-text card-payment--title">Basketball Hall</p>
                  <p class="card-text card-payment--price">Rp.150.000 / <small class="text-muted">Jam</small></p>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="detail py-5 px-5 mb-5">
                <h5 class="text-center fw-bold mb-5">Detail Pembayaran</h5>
                <div class="mb-3 d-flex justify-content-between">
                  <p>Nama Penyewa</p>
                  <p class="fw-bold text-end">Ahmad Lutfi Prawira Sanjaya</p>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                  <p>Tanggal Sewa</p>
                  <p class="fw-bold">15 Desember 2021</p>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                  <p>Jam Sewa</p>
                  <p class="fw-bold">14.00</p>
                </div>
                <div class="mb-5 d-flex justify-content-between">
                  <p>Durasi Sewa</p>
                  <p class="fw-bold">2 Jam</p>
                </div>

                <!-- metode pembayaran -->
                <h5 class="fw-bold mb-4">Pilih Metode Pembayaran</h5>
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-otomatis-tab" data-bs-toggle="pill" data-bs-target="#pills-otomatis" type="button" role="tab" aria-controls="pills-otomatis" aria-selected="true">Otomatis</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-manual-tab" data-bs-toggle="pill" data-bs-target="#pills-manual" type="button" role="tab" aria-controls="pills-manual" aria-selected="false">Manual Payment</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active ms-1" id="pills-otomatis" role="tabpanel" aria-labelledby="pills-otomatis-tab">
                    <div class="mb-3 d-flex justify-content-between">
                      <p>Harga Sewa</p>
                      <p class="fw-bold">Rp. 150.000</p>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                      <p>Durasi Sewa</p>
                      <p class="fw-bold">2 Jam</p>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                      <p>Tax</p>
                      <p class="fw-bold">10 %</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-between">
                      <p>Total Bayar</p>
                      <p class="fw-bold">Rp. 330.000</p>
                    </div>
                    <div class="d-grid gap-2">
                      <a class="btn btn-danger btn-submit" href="../pages/payment-success.html" role="button">Bayar Menggunakan Midtrans</a>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-manual" role="tabpanel" aria-labelledby="pills-manual-tab">
                    <div class="tab-pane fade show active ms-1" id="pills-manual" role="tabpanel" aria-labelledby="pills-manual-tab">
                      <div class="mb-3 d-flex justify-content-between">
                        <p>Harga Sewa</p>
                        <p class="fw-bold">Rp. 150.000</p>
                      </div>
                      <div class="mb-3 d-flex justify-content-between">
                        <p>Durasi Sewa</p>
                        <p class="fw-bold">2 Jam</p>
                      </div>
                      <div class="mb-3 d-flex justify-content-between">
                        <p>Tax</p>
                        <p class="fw-bold">10 %</p>
                      </div>
                      <div class="mb-5 d-flex justify-content-between">
                        <p>Total Bayar</p>
                        <p class="fw-bold">Rp. 330.000</p>
                      </div>

                      <!-- Transfer -->
                      <h5 class="fw-bold mb-4">Transfer Pembayaran</h5>
                      <div class="mb-5">
                        <p class="fw-bold">Mandiri</p>
                        <p>CGV Arena</p>
                        <p>123 123 123 123</p>
                      </div>

                      <div class="mb-5">
                        <p class="fw-bold">BCA</p>
                        <p>CGV Arena</p>
                        <p>123 123 123 123</p>
                      </div>
                      <div class="d-grid gap-2">
                        <a class="btn btn-danger btn-submit" href="{{route('payment-success')}}" role="button">Konfirmasi Pembayaran</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="info py-5 px-5">
                <h5 class="fw-bold mb-4">Transfer Pembayaran</h5>
                <p>Proses konfirmasi pembayaran akan membutuhkan waktu sekitar 20 menit (dari pesan WhatsApp dikirim) jika menggunakan metode pembayaran manual. Mohon menunggu dengan sabar dan terima kasih.</p>
                <p class="fw-bold mb-4">Butuh bantuan? hubungi kami</p>
                <div class="d-grid gap-2">
                  <a class="btn btn-secondary btn-submit" href="#" role="button">Chat Whatsapp Admin</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#3a4f50"" fill-opacity="1" d="M0,256L120,240C240,224,480,192,720,197.3C960,203,1200,245,1320,266.7L1440,288L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>
      </section>

    <x-footer></x-footer>
</x-app-layout>
