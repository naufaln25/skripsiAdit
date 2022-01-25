<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{$title}} CGV Arena</title>
    <link rel="stylesheet" href="/css/min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  </head>
  <body>
      <x-navbar></x-navbar>

      {{ $slot }}

      <x-footer></x-footer>
    <script src="/js/app.js"></script>
  </body>
</html>
