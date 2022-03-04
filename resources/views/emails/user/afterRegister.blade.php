@component('mail::message')
# Selamat Datang

Hi, {{$user->name}} <br>
Selamat datang di CGV Arena, Akun kamu telah berhasil dibuat. Sekarang kamu bisa memilih venue yang ingin kamu booking untuk bersenang-senang bersama teman dan keluarga.

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
