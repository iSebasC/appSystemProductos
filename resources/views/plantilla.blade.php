<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="shortcut icon" href=" {{ asset('img/1x/logo.png') }} ">

  <title>AppSystem | Sebastian C</title>

  <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">

  {{-- Bootstrap 5 --}}
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

  {{-- FontAwesone --}}
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>

<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="/principal">/SC/</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2" href="/productos">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="/categorias">Categorias</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>

    <div class="container-fluid">
        @yield('contenido')
    </div>

</body>

{{-- SCRIPT --}}
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</html>