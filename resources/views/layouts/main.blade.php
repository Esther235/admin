<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Bootstarp Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    {{-- My Style --}}

    <link rel="stylesheet" href="{{ asset('css-sb/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('css-sb/sb-admin-2.min.css') }}">

    <script src="https://unpkg.com/feather-icons"></script>
    
    {{-- Trix Edtor --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('css-sb/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js-sb/trix.js') }}"></script>

    <title>Hello</title>
  </head>
  <body>

    @include('partials.navbar')
<div class="container mt-4">
    @yield('container')
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
<script src="{{ asset('js-sb/sb-admin-2.js') }}"></script>
<script src="{{ asset('js-sb/sb-admin-2.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
      feather.replace();
    </script>
  </body>
</html>