@extends('layouts.app')
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="../TrabajoIntegrador/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../TrabajoIntegrador/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles1.css">
    <meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<title>Sneakers</title>
  </head>
  <body id="cuerpo">

        <!-- encabezado de pagina -->

        <header>
          <div class="encabezado">
            <input class="flexsearch--input" type="search" placeholder="Busca un producto">
            <input class="flexsearch--submit" type="submit" value="&#10140;"/>
            <div>
              @if (Auth::check())
                <a href="/home" class="logo"><img src="/images/logosneakers.png"/></a>
              @else
                <a href="/" class="logo"><img src="/images/logosneakers.png"/></a>
              @endif

            </div>
            <ul>
              @if (Auth::check())

              @else
              <li><a class="llamar-ingreso">Ingresa</a></li>
              @endif

              @if (Auth::check())

              @else
              <li><a href="{{ url('/register') }}" target="new">Registrate</a></li>
              @endif
              @if (Auth::check())
                <li><a href="/home">Home</a></li>
                <li><a href="/ayuda" target="new" class="faq">Ayuda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu" style="margin-top: 4px; margin-left: -42px">
                        <li><a href="/products/create" style="background-color:white;">Vender Ahora</a></li>
                            <li role="presentation" class="divider" style="display: block;"></li>
                        <li><a href="/publicaciones" style="background-color: white;">Mis Publicaciones</a></li>
                            <li role="presentation" class="divider" style="display: block;"></li>
                        <li>
                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                            <a href="{{ url('/logout') }}" style="background-color: white;"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>

                    </ul>
                </li>
              @else
                <li><a href="ayuda" target="new" class="faq">Ayuda</a></li>
              @endif

            </ul>
          </div>
        </header>

      <div class="contenedor-show">
        <div class="contenedor-imagen">
          <div class="categorias">
            <h4 style="margin-top:4px; margin-left: 10px">Categoría</h4>
            <p style="margin-left: 10px">{{ $product->category->value }}</p>
          </div>
        </div>
        <div class="contenedor-titulo-precio">
          <h1>{{ $product->name }}</h1>
          <h3>${{ $product->price }}</h3>
        </div>
        <div class="descripcion">
          <h3 style="margin-top: -10px;">Descripción</h3>
          <p>{{ $product->description }}</p>
        </div>
        <div class="materiales">
          <h4 style="margin-top: 18px; margin-left: 4px">Materiales</h4>
          <ul>
            @foreach($product->materials as $material)
              <li>{{ $material->value }}</li>
            @endforeach
          </ul>
        </div>
      </div>

      <p>
        <a style="color: black;" href="/products">Volver a la lista de productos</a>
      </p>


        <!-- pie de pagina -->
          <footer class="pie">
            <ul>
              <span style="font-size: 15px; float: left; margin-top: 4px;color: black;">&copy; 2016 SneakerShop.com</span>
              @if (Auth::check())
                <li><a href="/home">Home</a></li>
              @else
                <li><a href="/">Home</a></li>
              @endif
              <li><a href="/register">Registro</a></li>
              <li style="border-right: none;"><a href="/ayuda">Ayuda</a></li>
              <a target="_blank" href="https://twitter.com/"><img src="/images/index/icon-twitter.ico" class="icon-twitter"/></a>
              <a target="_blank" href="https://www.facebook.com/"><img src="/images/index/icon-facebook.ico" class="icon-facebook"/></a>
            </ul>
          </footer>

          <!-- esto va aca abajo para que primero se cargue toda la estructura de la pagina junto con el css si es que tiene y despues cargen los script -->
          <script src="/js/llamadas.js"></script>
</body>
</html>
