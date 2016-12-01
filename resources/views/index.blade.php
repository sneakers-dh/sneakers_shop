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
		<title>Sneakers - Encuentra tu caminar</title>
  </head>
  <body id="cuerpo">

        <!-- encabezado de pagina -->

        <header>
          <div class="encabezado">
            <input class="flexsearch--input" type="search" placeholder="Busca un producto">
            <input class="flexsearch--submit" type="submit" value="&#10140;"/>
            <div>
              <a href="/" class="logo"><img src="/images/logosneakers.png"/></a>
            </div>
            <ul>
              <li><a class="llamar-ingreso">Ingresa</a></li>
              <li><a href="{{ url('/register') }}" target="new">Registrate</a></li>
              <li><a href="ayuda" target="new" class="faq">Ayuda</a></li>
            </ul>
          </div>
        </header>

        <!-- barra de navegacion -->

              <div class="barra-navegacion">
                <ul>
    							<li><a class="llamar-categoria">CATEGORIAS</a></li>
    							<li><a href="">HOMBRES</a></li>
    							<li><a href="">MUJERES</a></li>
    							<li><a href="">MARCAS</a></li>
    							<li><a href="products">PRODUCTOS</a></li>
                </ul>
              </div>

        <!-- contenedor de logeo -->

        <div class='ingreso' style="display: none;" id="contenedor-ingreso">
          <form id="formulario" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <h2>Ingreso</h2>

            <div>
              <input id="email" name='email' placeholder='Ingrese Email' type='email' value="{{ old('email') }}" required autofocus/>



            </div>

            <div "{{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" name='password' placeholder='Ingrese Contraseña' type='password' required/>

              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif

            </div>

              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif

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

    				 <!-- CATEGORIAS -->
             <div class="container-categoria" style="display: none;">
    		       <div class="categoria">

    		         <div class="zapatillas">
    		           <p class="titulo"><a href="products/zapatillas" style="color: white;">Zapatillas</a></p>
    		           <ul class="lista">
    		             <li><a href="#">Hombres</a></li>
    		             <li><a href="#">Mujeres</a></li>
    		             <li><a href="#">Niños</a></li>
    		           </ul>
    		         </div>

    		         <div class="zapatos">
    		           <p class="titulo"><a href="products/zapatos" style="color: white;">Zapatos</a></p>
    		           <ul class="lista">
    		             <li><a href="#">Hombres</a></li>
    		             <li><a href="#">Mujeres</a></li>
    		             <li><a href="#">Niños</a></li>
    		           </ul>
    		         </div>

    		         <div class="deportes">
    		          <p class="titulo"><a href="products/ojotas" style="color: white;">Ojotas</a></p>
    		          <ul class="lista">
    		            <li><a href="#">Hombres</a></li>
    		            <li><a href="#">Mujeres</a></li>
    		            <li><a href="#">Niños</a></li>
    		          </ul>
    		         </div>

    		         <div class="moda">
    		          <p class="titulo"><a href="products/sandalias" style="color: white;">Sandalias</a></p>
    		          <ul class="lista">
                    <li><a href="#">Hombres</a></li>
    		            <li><a href="#">Mujeres</a></li>
    		            <li><a href="#">Niños</a></li>
    		          </ul>
    		         </div>

    		         <div class="running">
    		           <p class="titulo"><a href="products/botas" style="color: white;">Botas</a></p>
    		           <ul class="lista">
    		             <li><a href="#">Hombres</a></li>
    		             <li><a href="#">Mujeres</a></li>
    		           </ul>
    		         </div>

                 <div class="running">
    		           <p class="titulo"><a href="products/botines" style="color: white;">Botines</a></p>
    		           <ul class="lista">
                     <li><a href="#">Hombres</a></li>
     		            <li><a href="#">Mujeres</a></li>
     		            <li><a href="#">Niños</a></li>
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

    		<!-- aviso registro -->

    			    <div class="contenedor-registro">
    			        <div class="caja-registro">
    			      <h2 class="inline-title texto">¿Aún no tienes una cuenta?</h2>
    			      <a href="registro.php" class="boton">Registrarse Ahora</a>
    			        </div>
    			    </div>

    		<!-- ultimas publicaciones -->

              <h1 class="title">Últimas Publicaciones</h1>
              <div class="ultimas-publicaciones">
                <div class="seccion" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px">
                <img src="../TrabajoIntegrador/images/index/secciones/nike.jpg" class="imagen-seccion" />
                <p class="titulos-imagen" /> Zapatillas Nike Priority Low</p>
                <p class="precio">$1369,00</p>
                </div>
                <div class="seccion">
                  <img src="../TrabajoIntegrador/images/index/secciones/adidas.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Zapatillas Adidas Neo Park St</p>
                  <p class="precio">$1249,00</p>
                </div>
                <div class="seccion">
                  <img src="../TrabajoIntegrador/images/index/secciones/nike.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Zapatillas Nike Priority Low</p>
                  <p class="precio">$1369,00</p>
                </div>
                <div class="seccion">
                  <img src="../TrabajoIntegrador/images/index/secciones/adidas.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Zapatillas Adidas Neo Park St</p>
                  <p class="precio">$1249,00</p>
                </div>
                <div class="seccion" style="  border-top-right-radius: 15px;  border-bottom-right-radius: 15px;">
                  <img src="../TrabajoIntegrador/images/index/secciones/nike.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Zapatillas Nike Priority Low</p>
                  <p class="precio">$1369,00</p>
                </div>
              </div>

        <!-- mas vistos -->
              <h1 class="title">Más visitados</h1>
              <div class="mas-vistos">
                <div class="seccion" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px">
                  <img src="../TrabajoIntegrador/images/index/secciones/converse.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Zapatillas Converse Gates Ox Cnvs</p>
                  <p class="precio">$1610,00</p>
                </div>
                <div class="seccion">
                  <img src="../TrabajoIntegrador/images/index/secciones/pumas.jpg" class="imagen-seccion"/>
                  <p class="titulos-imagen" /> Zapatillas Puma Sequence V2</p>
                  <p class="precio">$1349,00</p>
                </div>
                <div class="seccion">
                  <img src="../TrabajoIntegrador/images/index/secciones/converse.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Zapatillas Converse Gates Ox Cnvs</p>
                  <p class="precio">$1610,00</p>
                </div>
                <div class="seccion">
                  <img src="../TrabajoIntegrador/images/index/secciones/pumas.jpg" class="imagen-seccion"/>
                  <p class="titulos-imagen" /> Zapatillas Puma Sequence V2</p>
                  <p class="precio">$1349,00</p>
                </div>
                <div class="seccion" style="  border-top-right-radius: 15px;  border-bottom-right-radius: 15px;">
                  <img src="../TrabajoIntegrador/images/index/secciones/converse.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Zapatillas Converse Gates Ox Cnvs</p>
                  <p class="precio">$1610,00</p>
                </div>
              </div>

        <!-- ultimo visitado -->
              <h1 class="title">Ultimos Visitados</h1>
              <div class="ultimo-visitado">
                <div class="seccion" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px">
                  <img src="../TrabajoIntegrador/images/index/secciones/ojotas-puma.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Ojotas Puma Cat Slide Ts Dp</p>
                  <p class="precio">$467,00</p>
                </div>
                <div class="seccion">
                  <img src="../TrabajoIntegrador/images/index/secciones/crocs.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Zapatillas Crocs Walu Canvas Loafer</p>
                  <p class="precio">$794,25</p>
                </div>
                <div class="seccion">
                  <img src="../TrabajoIntegrador/images/index/secciones/ojotas-puma.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Ojotas Puma Cat Slide Ts Dp</p>
                  <p class="precio">$467,00</p>
                </div>
                <div class="seccion">
                  <img src="../TrabajoIntegrador/images/index/secciones/crocs.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Zapatillas Crocs Walu Canvas Loafer</p>
                  <p class="precio">$794,25</p>
                </div>
                <div class="seccion" style="  border-top-right-radius: 15px;  border-bottom-right-radius: 15px;">
                  <img src="../TrabajoIntegrador/images/index/secciones/ojotas-puma.jpg" class="imagen-seccion" />
                  <p class="titulos-imagen" /> Ojotas Puma Cat Slide Ts Dp</p>
                  <p class="precio">$467,00</p>
                </div>
              </div>

          </div>
          <!-- pie de pagina -->
            <footer class="pie">
              <ul>
      					<span style="font-size: 15px; float: left; margin-top: 4px;color: black;">&copy; 2016 SneakerShop.com</span>
                @if (Auth::check())
                  <li><a href="home">Home</a></li>
                @else
                  <li><a href="/">Home</a></li>
                @endif
                <li><a href="register">Registro</a></li>
                <li style="border-right: none;"><a href="ayuda">Ayuda</a></li>
      					<a target="_blank" href="https://twitter.com/"><img src="images/index/icon-twitter.ico" class="icon-twitter"/></a>
      					<a target="_blank" href="https://www.facebook.com/"><img src="images/index/icon-facebook.ico" class="icon-facebook"/></a>
      				</ul>
            </footer>

            <!-- esto va aca abajo para que primero se cargue toda la estructura de la pagina junto con el css si es que tiene y despues cargen los script -->
            <script src="js/llamadas.js"></script>

  </body>
</html>
