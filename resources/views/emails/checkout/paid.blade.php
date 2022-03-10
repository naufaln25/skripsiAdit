@component('mail::message')
# Pembayaranmu Sudah Dikonfirmasi

Hi, {{$checkout->User->name}}
<br>
Pembayaranmu sudah dikonfirmasi, silahkan datang ke {{$checkout->Venue->name}} pada waktu yang ditentukan saat booking. Selamat bersenang-senang!

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
