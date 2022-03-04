@component('mail::message')
# Booking Venue : {{$checkout->Venue->name}}

Hi {{$checkout->User->name}}
<br>
Terima kasih sudah melakukan checkout untuk venue <b>{{$checkout->Venue->name}}</b>, Silahkan lihat instruksi pembayaran dengan melakukan klik pada button dibawah ini.

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
