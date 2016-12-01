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
		<title>Sneakers - Mis Publicaciones</title>
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
                <li><a href="home">Home</a></li>
                <li><a href="ayuda" target="new" class="faq">Ayuda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu" style="margin-top: 4px; margin-left: -42px">
                        <li><a href="/products/create" style="background-color:white;">Vender Ahora</a></li>
                            <li role="presentation" class="divider" style="display: block;"></li>
                        <li><a href="#" style="background-color: white;">Mis Publicaciones</a></li>
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

        <!-- contenedor de logeo -->

        <div class='ingreso' style="display: none;" id="contenedor-ingreso">
          <form id="formulario" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <h2>Ingreso</h2>

            <div>
              <input id="email" name='email' placeholder='Ingrese Email' type='email' value="{{ old('email') }}" required autofocus/>

              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif

            </div>

            <div "{{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" name='password' placeholder='Ingrese Contraseña' type='password' required/>

              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif

            </div>

            <div class='recuerda'>
              <input id="recordame"name='recordame' type='checkbox'/>
              <label for='remember'></label>Recordarme
            </div>
            <input type="submit" value="Ingresar" class="submit">
            <a class='olvido' href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a>
            <div>
              <p id="cartellogin" class="cartel-login"></p>
            </div>
          </form>
        </div>


        <div class="container">
            <h1>Mis Publicaciones</h1>

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Categoría</th>
                  <th>Precio</th>
                  <th>Materiales</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @forelse($products as $product)
                  <tr>
                    <td><a href="/products/{{$product->id}}">{{ $product->name }}</a></td>
                    <td>{{ $product->category->value }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ $product->materials()->pluck('value')->implode(', ') }}</td>
                    <td>
                      <a href="/products/{{$product->id}}/edit">Editar</a>
                      <form action="/products/{{$product->id}}" method="post" style="display: inline-block">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <input type="submit" name="Borrar" value="Borrar" class="btn btn-danger btn-xs" style="display: inline-block">
                      </form>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="5">Todavia no hiciste ninguna publicacion <br>
                    <a href="/products/create">Crear una publicacion</a></td>

                  </tr>
                @endforelse
                </tbody>
              </table>

          </div>
          <p style="text-align: center;">
            <a style="color: black;" href="/products">Volver a la lista de productos</a>
            <a style="color: black;"> | </a>
            <a style="color: black;" href="/products/create">Crear una publicacion</a>
          </p>

          <!-- pie de pagina -->
            <footer class="pie">
              <ul>
                <span style="font-size: 15px; float: left; margin-top: 4px;color: black;">&copy; 2016 SneakerShop.com</span>
                @if (Auth::check())
                  <li><a href="home">Home</a></li>
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
