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
		<title>Sneakers - Edicion de Producto</title>
  </head>
  <body id="cuerpo">

        <!-- encabezado de pagina -->

        <header>
          <div class="encabezado">
            <input class="flexsearch--input" type="search" placeholder="Busca un producto">
            <input class="flexsearch--submit" type="submit" value="&#10140;"/>
            <div>
              <a href="#" class="logo"><img src="/images/logosneakers.png"/></a>
            </div>
            <ul>
              <li><a class="llamar-ingreso">Ingresa</a></li>
              <li><a href="{{ url('/register') }}" target="new">Registrate</a></li>
              <li><a href="ayuda" target="new" class="faq">Ayuda</a></li>
            </ul>
          </div>
        </header>

        <div class="container">
    <form action="/products/{{$product->id}}" method="post" class="form-horizontal" style="margin-left: 28%; margin-top: 3%;">
      {{ csrf_field() }}
      {{ method_field('patch') }}

      <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}" class="form-control" style="width:65%">
      </div>

      <div class="form-group">
        <label for="price">Precio</label>
        <input type="text" name="price" value="{{ old('price', $product->price) }}" class="form-control" style="width:65%">
      </div>

      <div class="form-group">
        <label for="description">Descripción</label>
        <textarea name="description" rows="10" class="form-control" style="width:65%">{{ old('description', $product->description) }}</textarea>
      </div>

      <div class="form-group">
        <label for="name">Categoría</label>
        <select name="category_id" class="form-control" style="width:65%;">
          @foreach ($categories as $category)
              @php $selected = ($category->id == $product->category_id)?'selected': '' @endphp
              <option value="{{$category->id}}" {{$selected}}>{{$category->value}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="name">Materiales</label>
        <br>
        @foreach ($materials as $material)
          <div>
            @php $checked = (in_Array($material->id, $product->materials()->pluck('id')->toArray()) )?'checked':'' @endphp
            <input type="checkbox" name="materials[]" value="{{$material->id}}" id="check{{$material->id}}" {{$checked}}><label for="check{{$material->id}}">{{$material->value}}</label>
          </div>
        @endforeach
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
