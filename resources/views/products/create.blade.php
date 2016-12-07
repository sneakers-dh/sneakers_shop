@extends('layouts.app')
<?php
if (Auth::guest()) {
   return redirect('index');
}
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="../TrabajoIntegrador/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles1.css">
    <meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<title>Sneakers - Vender Ahora</title>
  </head>
  <body id="cuerpo">

        <!-- encabezado de pagina -->

        <header>
          <div class="encabezado">
            <input class="flexsearch--input" type="search" placeholder="Busca un producto">
            <input class="flexsearch--submit" type="submit" value="&#10140;"/>
            <div>
              <a href="/home" class="logo"><img src="/images/logosneakers.png"/></a>
            </div>
            <ul>
              @if (Auth::check())
                <li><a href="../home">Home</a></li>
              @else
                <li><a href="/">Home</a></li>
              @endif
              <li><a href="../ayuda" target="new" class="faq">Ayuda</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu" style="margin-top: 4px; margin-left: -42px">
                      <li><a href="/publicaciones" style="background-color: white;">Mis Publicaciones</a></li>
                      <li role="presentation" class="divider" style="display: block;"></li>
                      <li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                          <a href="{{ url('/logout') }}" style="background-color: white;"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                      </li>
                  </ul>
              </li>
            </ul>
          </div>
        </header>

        <div class="container">
          <form id="formulario" action="/products" method="post" class="form-horizontal" style="margin-left: 28%; margin-top: 3%;" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('post') }}

            <div class="form-group">
              <label for="name">Nombre</label>
              <input id="titulo" type="text" name="name" value="{{ old('name') }}" class="form-control" style="width:65%">
              <p id="carteltitulo" style="display:block; color: red;font-size:17px;"></p>
            </div>

            <div class="form-group">
              <label for="price">Precio</label>
              <input id="precio" type="text" name="price" value="{{ old('price') }}" class="form-control" style="width:65%">
              <p id="cartelprecio" style="display:block; color: red;font-size:17px;"></p>
            </div>

            <div class="form-group">
              <label for="description">Descripción</label> <span style="margin-left: 42%">Caracteres:<input type="text" name="remLen" style="width: 42px" value="280" readonly></span>
              <textarea name="description" rows="10" class="form-control" style="width:65%" id="descripcion" onkeydown="contador(this.form.description,this.form.remLen,280);" onkeyup="contador(this.form.description,this.form.remLen,280);">{{ old('description') }}</textarea>
              <p id="carteldescripcion" style="display:block; color: red;font-size:17px;"></p>
            </div>

            <div class="form-group">
              <label for="name">Categoría</label>
              <select name="category_id" class="form-control" style="width:65%;" required>
                @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->value}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="name">Materiales</label>
              <br>
                @foreach ($materials as $material)
                  <div>
                    <input type="checkbox" name="materials[]" value="{{$material->id}}" id="check{{$material->id}}"><label for="check{{$material->id}}">{{$material->value}}</label>
                  </div>
                @endforeach
            </div>
            <label for="name">Imagenes</label>

            <div class="form-group">
              <div class="fallback">
                <input name="file" type="file" multiple />
              </div>
            </div>

            <div class="form-group">
              <input type="submit" name="enviar" value="Publicar" class="btn btn-primary" style="background-color: #FCFFCC; color: black; border-color: #FCFFCC">
              <input type="reset" name="reset" value="Limpiar Campos" class="btn btn-primary" style="background-color: #FCFFCC; color: black; border-color: #FCFFCC">
            </div>
          </form>
        </div>



        <!-- pie de pagina -->
          <footer class="pie">
            <ul>
              <span style="font-size: 15px; float: left; margin-top: 4px; color: black;">&copy; 2016 SneakerShop.com</span>
              <li><a href="../home">Home</a></li>
              <li><a href="../register">Registro</a></li>
              <li style="border-right: none;"><a href="ayuda">Ayuda</a></li>
              <a target="_blank" href="https://twitter.com/"><img src="/images/index/icon-twitter.ico" class="icon-twitter"/></a>
              <a target="_blank" href="https://www.facebook.com/"><img src="/images/index/icon-facebook.ico" class="icon-facebook"/></a>
            </ul>
          </footer>

  </body>
</html>
