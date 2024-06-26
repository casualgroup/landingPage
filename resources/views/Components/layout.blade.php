<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
  <div class="px-3 py-2 text-bg-dark border-bottom fixed-top">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center">
        <img src="{{asset('img/logoIconWhite.png')}}" alt="Logo Casual Group" width="5%">
        <a href="/" class="navbar-brand d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
          Casual Group
        </a>

        <ul class="nav col-12 col-lg-auto justify-content-center my-md-0 text-small">
          <li>
            <a href="{{ url('/') }}" class="nav-link text-white">
              Home
            </a>
          </li>
          <li>
            <a href="{{ url('tecnologias') }}" class="nav-link text-white">
              Tecnologias que usamos
            </a>
          </li>
          <li>
            <a href="{{ url('projetos') }}" class="nav-link text-white">
              Nossos Projetos
            </a>
          </li>
          <li>
            <a href="{{ url('equipe') }}" class="nav-link text-white">
              Nossa Equipe
            </a>
          </li>
          <li>
            <a href="{{ url('contato') }}" class="nav-link text-white">
              Contato
            </a>
          </li>
          <li>
            <a href="{{ url('faq') }}" class="nav-link text-white">
              FAQ
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<main>
  <div>
    {{ $slot }}
  </div>
</main>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-dark fixed-bottom">
  <p class="col-md-4 mb-0 text-white">© Casual Group. 2021</p>
  <ul class="nav col-md-4 justify-content-end">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Instagram</a></li>
    <li class="nav-item"><a href="mailto:contatocasualgroup@gmail.com" class="nav-link px-2 text-white">Email</a></li>
  </ul>
</footer>
</body>
</html>
