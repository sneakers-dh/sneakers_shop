@extends('layouts.app')

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
		<title>Sneakers - Encuentra tu caminar</title>
  </head>
  <body id="cuerpo">

        <!-- encabezado de pagina -->

        <header>
          <div class="encabezado">
            <input class="flexsearch--input" type="search" placeholder="Busca un producto">
            <input class="flexsearch--submit" type="submit" value="&#10140;"/>
            <div>
              <a href="home" class="logo"><img src="/images/logosneakers.png"/></a>
            </div>
            <ul>
              <li><a href="ayuda" target="new" class="faq">Ayuda</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu" style="margin-top: 4px; margin-left: -42px">
                      <li><a href="/products/create" style="background-color:white;">Vender Ahora</a></li>
                          <li role="presentation" class="divider" style="display: block;"></li>
                      <li><a href="publicaciones" style="background-color: white;">Mis Publicaciones</a></li>
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
            </ul>
          </div>
        </header>

        <!-- barra de navegacion -->

        <div class="barra-navegacion">
          <ul>
            <li><a class="llamar-categoria">CATEGORIAS</a></li>
            <li><a href="products/zapatillas">ZAPATILLAS</a></li>
            <li><a href="products/zapatos">ZAPATOS</a></li>
            <li><a href="products/ojotas">OJOTAS</a></li>
            <li><a href="products/sandalias">SANDALIAS</a></li>
            <li><a href="products/botas">BOTAS</a></li>
            <li><a href="products/botines">BOTINES</a></li>
            <li><a href="products">PRODUCTOS</a></li>
            <li><a href="products/create">VENDER AHORA</a></li>
          </ul>
        </div>

             <!-- CATEGORIAS -->
             <div class="container-categoria" style="display: none;">
    		       <div class="categoria">

    		         <div class="zapatillas">
    		           <p class="titulo"><a href="products/zapatillas" style="color: white;">Zapatillas</a></p>
    		           <ul class="lista">
                     <li><a href="#">Goma</a></li>
    		             <li><a href="#">Gamuza</a></li>
    		             <li><a href="#">Cuero</a></li>
                     <li><a href="#">Cuerina</a></li>
                     <li><a href="#">Algodon</a></li>
                     <li><a href="#">Lona</a></li>
                     <li><a href="#">Malla</a></li>
    		           </ul>
    		         </div>

    		         <div class="zapatos">
    		           <p class="titulo"><a href="products/zapatos" style="color: white;">Zapatos</a></p>
    		           <ul class="lista">
                     <li><a href="#">Goma</a></li>
    		             <li><a href="#">Gamuza</a></li>
    		             <li><a href="#">Cuero</a></li>
                     <li><a href="#">Cuerina</a></li>
                     <li><a href="#">Algodon</a></li>
                     <li><a href="#">Lona</a></li>
                     <li><a href="#">Malla</a></li>
    		           </ul>
    		         </div>

    		         <div class="deportes">
    		          <p class="titulo"><a href="products/ojotas" style="color: white;">Ojotas</a></p>
    		          <ul class="lista">
                    <li><a href="#">Goma</a></li>
                    <li><a href="#">Gamuza</a></li>
                    <li><a href="#">Cuero</a></li>
                    <li><a href="#">Cuerina</a></li>
                    <li><a href="#">Algodon</a></li>
                    <li><a href="#">Lona</a></li>
                    <li><a href="#">Malla</a></li>
    		          </ul>
    		         </div>

    		         <div class="moda">
    		          <p class="titulo"><a href="products/sandalias" style="color: white;">Sandalias</a></p>
    		          <ul class="lista">
                    <li><a href="#">Goma</a></li>
                    <li><a href="#">Gamuza</a></li>
                    <li><a href="#">Cuero</a></li>
                    <li><a href="#">Cuerina</a></li>
                    <li><a href="#">Algodon</a></li>
                    <li><a href="#">Lona</a></li>
                    <li><a href="#">Malla</a></li>
    		          </ul>
    		         </div>

    		         <div class="running">
    		           <p class="titulo"><a href="products/botas" style="color: white;">Botas</a></p>
    		           <ul class="lista">
                     <li><a href="#">Goma</a></li>
    		             <li><a href="#">Gamuza</a></li>
    		             <li><a href="#">Cuero</a></li>
                     <li><a href="#">Cuerina</a></li>
                     <li><a href="#">Algodon</a></li>
                     <li><a href="#">Lona</a></li>
                     <li><a href="#">Malla</a></li>
    		           </ul>
    		         </div>

                 <div class="running">
    		           <p class="titulo"><a href="products/botines" style="color: white;">Botines</a></p>
    		           <ul class="lista">
                     <li><a href="#">Goma</a></li>
    		             <li><a href="#">Gamuza</a></li>
    		             <li><a href="#">Cuero</a></li>
                     <li><a href="#">Cuerina</a></li>
                     <li><a href="#">Algodon</a></li>
                     <li><a href="#">Lona</a></li>
                     <li><a href="#">Malla</a></li>
    		           </ul>
    		         </div>

    		     </div>
    			 </div>

        <!-- banner propaganda1 -->

              <div class="banner">
                <div><img src="images/index/banners/preciosincreibles.png" class="banner-propaganda"/></div>
              </div>

    		<!-- marcas -->

    			    <div class="marcas">
    			      <ul>
    			        <li><a href="#"><img src="images/index/marcas/nike.png"/></a></li>
    			        <li><a href="#"><img src="images/index/marcas/nike-sb.png"/></a></li>
    			        <li><a href="#"><img src="images/index/marcas/adidas.png"/></li>
    			        <li><a href="#"><img src="images/index/marcas/puma.png"/></li>
    			        <li><a href="#"><img src="images/index/marcas/reebok.png"/></li>
    			        <li><a href="#"><img src="images/index/marcas/dc.png"/></li>
    			        <li><a href="#"><img src="images/index/marcas/converse.png"/></li>
    			        <li><a href="#"><img src="images/index/marcas/crocs.png"/></a></li>
    							<li><a href="#"><img src="images/index/marcas/umbro.png"/></a></li>
    							<li><a href="#"><img src="images/index/marcas/lacoste.png"/></a></li>
    			      </ul>
    					</div>

              <!-- ultimas publicaciones -->

              <h1 class="title">Zapatillas</h1>
              <div class="ultimas-publicaciones">
                @forelse ($zapatillas as $zapatilla)
                <div class="seccion" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px">
                  <img src="" class="imagen-seccion" />
                  <p class="titulos-imagen" />{{ $zapatilla->name}}</p>
                  <p class="precio">${{ $zapatilla->price }}</p>
                </div>
              @empty
              <div class="no-hay-productos">
                <p>
                  No hay productos cargados
                </p>
              </div>
              @endforelse
              </div>

              <!--  Zapatos -->
              <h1 class="title">Zapatos</h1>
              <div class="ultimas-publicaciones">
              @forelse ($zapatos as $zapato)
                <div class="seccion" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px">
                  <img src="" class="imagen-seccion" />
                  <p class="titulos-imagen" />{{ $zapato->name}}</p>
                  <p class="precio">${{ $zapato->price }}</p>
                </div>
              @empty
              <div class="no-hay-productos">
                <p>
                  No hay productos cargados
                </p>
              </div>
              @endforelse
              </div>

        <!-- ojotas -->
              <h1 class="title">Ojotas</h1>
              <div class="ultimas-publicaciones">
              @forelse ($ojotas as $ojota)
                <div class="seccion" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px">
                  <img src="" class="imagen-seccion" />
                  <p class="titulos-imagen" />{{ $ojota->name}}</p>
                  <p class="precio">${{ $ojota->price }}</p>
                </div>
              @empty
              <div class="no-hay-productos">
                <p>
                  No hay productos cargados
                </p>
              </div>
              @endforelse
              </div>

              <!-- sandalias -->
              <h1 class="title">Sandalias</h1>
              <div class="ultimas-publicaciones">
              @forelse ($sandalias as $sandalia)
                <div class="seccion" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px">
                  <img src="" class="imagen-seccion" />
                  <p class="titulos-imagen" />{{ $sandalia->name}}</p>
                  <p class="precio">${{ $sandalia->price }}</p>
                </div>
              @empty
              <div class="no-hay-productos">
                <p>
                  No hay productos cargados
                </p>
              </div>
              @endforelse
              </div>

              <!-- botas -->
              <h1 class="title">Botas</h1>
              <div class="ultimas-publicaciones">
              @forelse ($botas as $bota)
                <div class="seccion" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px">
                  <img src="" class="imagen-seccion" />
                  <p class="titulos-imagen" />{{ $bota->name}}</p>
                  <p class="precio">${{ $bota->price }}</p>
                </div>
              @empty
              <div class="no-hay-productos">
                <p>
                  No hay productos cargados
                </p>
              </div>
              @endforelse
              </div>

              <!-- botines -->
              <h1 class="title">Botines</h1>
              <div class="ultimas-publicaciones">
              @forelse ($botines as $botin)
                <div class="seccion" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px">
                  <img src="" class="imagen-seccion" />
                  <p class="titulos-imagen" />{{ $botin->name}}</p>
                  <p class="precio">${{ $botin->price }}</p>
                </div>
              @empty
              <div class="no-hay-productos">
                <p>
                  No hay productos cargados
                </p>
              </div>
              @endforelse
              </div>
              
          <!-- pie de pagina -->
            <footer class="pie">
              <ul>
      					<span style="font-size: 15px; float: left; margin-top: 4px;color: black;">&copy; 2016 SneakerShop.com</span>
                <li><a href="home">Home</a></li>
                <li style="border-right: none;"><a href="ayuda">Ayuda</a></li>
      					<a target="_blank" href="https://twitter.com/"><img src="images/index/icon-twitter.ico" class="icon-twitter"/></a>
      					<a target="_blank" href="https://www.facebook.com/"><img src="images/index/icon-facebook.ico" class="icon-facebook"/></a>
      				</ul>
            </footer>

            <!-- esto va aca abajo para que primero se cargue toda la estructura de la pagina junto con el css si es que tiene y despues cargen los script -->
            <script src="js/llamadas.js"></script>

  </body>
</html>
