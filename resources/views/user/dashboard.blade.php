<x-app-layout title="My Dashboard | ">
    <x-navbar></x-navbar>
    <section class="dashboard">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                          <th scope="col">Nama Tempat</th>
                          <th scope="col"></th>
                          <th scope="col">Total</th>
                          <th scope="col">Tanggal Sewa</th>
                          <th scope="col">Durasi</th>
                          <th scope="col">Pembayaran</th>
                          <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($checkout as $checkout)
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="{{$checkout->Venue->image}}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>{{$checkout->Venue->name}}</strong>
                                </p>
                                <p>
                                    {{$checkout->created_at->format('d M Y')}}
                                </p>
                            </td>
                            <td>
                                <strong>{{$checkout->total}}</strong>
                            </td>
                            <td>
                                <strong>{{$checkout->tanggal_sewa->format('d M Y')}}</strong>
                            </td>
                            <td>
                                <strong>{{$checkout->durasi}} Jam</strong>
                            </td>
                            <td>
                                @if ($checkout->is_paid)
                                    <strong class="text-success">Pembayaran Berhasil</strong>
                                @else
                                    <strong>Menunggu Pembayaran</strong>
                                @endif
                            </td>
                            <td>
                                <a href="https://wa.me//08970153044?text=Hallo, Saya ingin bertanya konfirmasi pembayaran penyewaan {{$checkout->Venue->name}}" class="btn btn-rounded btn-danger">
                                    Contact Support
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">
                                <h3>Belum Ada Data Transaksi</h3>
                            </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
