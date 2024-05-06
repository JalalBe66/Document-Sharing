<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("titre")</title>
    <link rel="stylesheet" href="{{asset('css/template.css')}}" />
    <link rel="stylesheet" href="{{ asset($__env->yieldContent('css-integration')) }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  @section("header")
    <div id="full-nav-content" >
      <div id="full-nav" >
        <nav id="nav-principale" class="navbar navbar-expand-lg bg-body-tertiary">
          <div id="logo-icon-nav" class="container-fluid">
            <button id="icon-nav-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span  class="navbar-toggler-icon"></span>
            </button>
            <a  href="{{route('home')}}"><img  src="imgs/onetLogo.png"  width="100px"/></a>
            <div class="col-1 "></div>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item col-11 "  >
                  <a class="@yield('nav-link-home','nav-link')" aria-current="page" href="{{route('home')}}">Accueil</a>
                  <div class="lign-nav-link-container"><div class="@yield('lign-nav-link-home','lign-nav-link')"></div></div>
                </li>
                <li class="nav-item col-11 ">
                  <a class="@yield('nav-link-feature','nav-link')" href="#">Contact</a>
                  <div class="lign-nav-link-container"><div class="@yield('lign-nav-link-feature','lign-nav-link')"></div></div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="nav-connection">
          @auth
            <form   action="{{ route('logout') }}" method="post">
              @csrf
              <button id="deconnecter" type="submit" >Se déconnecter</button>
            </form>
            <a href="{{route('home')}}" class="connection-elem"><div>Mon compte</div></a>
          @endauth
          @guest
              <a href="{{ route('register') }}"class="connection-elem"><div>S'inscrire</div></a>
              <a href="{{ route('login') }}" class="connection-elem"><div>Se connecter</div></a>
          @endguest
        </div>
      </div>
    </div>
  @show
  @yield("contenu")
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
