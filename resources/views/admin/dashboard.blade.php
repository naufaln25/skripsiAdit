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
            @include('components.alert')
            <div class="row my-5">
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">Venue</th>
                          <th scope="col"></th>
                          <th scope="col">User</th>
                          <th scope="col">Tanggal Sewa</th>
                          <th scope="col">Durasi</th>
                          <th scope="col">Total</th>
                          <th scope="col">Status Pembayaran</th>
                          <th scope="col">Action</th>
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
                                <strong>{{$checkout->User->name}}</strong>
                            </td>
                            <td>{{$checkout->tanggal_sewa->format('d M Y')}}</td>
                            <td>{{$checkout->durasi}} Jam</td>
                            <td>Rp. {{$checkout->total}}</td>
                            <td>
                                <center>
                                    @if ($checkout->is_paid)
                                        <span class="badge bg-success">Pembayaran Sukses</span>
                                    @else
                                        <span class="badge bg-warning">Menunggu Pembayaran</span>
                                    @endif
                                </center>
                            </td>
                            <td>
                                @if(!$checkout->is_paid)
                                    <form action="{{route('admin.checkout.update', $checkout->id)}}" method="post">
                                        @csrf
                                        <button class="btn-small-action btn-danger">Update Paid</button>
                                    </form>
                                @endif
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
