<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="../TrabajoIntegrador/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/styles3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Sneakers - Ayuda</title>
  </head>
  <body>

    <!-- encabezado de pagina -->

    <header>
      <div class="encabezado">
        <div>
          <a href="/" class="logo"><img src="/images/logosneakers.png"/></a>
        </div>
        <ul>
          @if (Auth::check())
            <li><a href="home">Home</a></li>
          @else
            <li><a href="/">Home</a></li>
          @endif

          @if (Auth::check())

          @else
            <li><a href="register" target="new">Registrate</a></li>
          @endif

          @if (Auth::check())
            <li><a href="products/create">Vende Ahora</a></li>
          @else

          @endif

        </ul>
      </div>
    </header>

    <!-- barra de navegacion -->

        <div class="barra-navegacion">
          <ul>
            <li><a href="#preguntas">PREGUNTAS FRECUENTES</a></li>
            <li><a href="#compras">COMPRAS</a></li>
            <li><a href="#ventas">VENTAS</a></li>
            <li><a href="#reglas">REGLAS</a></li>
          </ul>
        </div>

    <!-- contenido -->

    <!-- PREGUNTAS -->
        <div class="preg-frec" id="preguntas">
          <div><h1>Preguntas Frecuentes</h1></div>
            <div style="border-bottom: 1px solid white; border-top: 1px solid white;" class="pregunta">
              <p style="font-size:16px;">-¿Necesito registrarme para comprar y vender en Sneakers-Shop?</p>
              <div class="pregunta-respuesta" style="display: none;">
                  <p>Para poder realizar compras, ventas e incluso realizar preguntas al vendedor hay que tener una cuenta en Sneakers-Shop. Puedes crearte una <a href="register" style="font-size:15px; color: #005224;" target="new">aca</a>.</p>
              </div>
            </div>

            <div style="border-bottom: 1px solid white;" class="pregunta2">
              <p style="font-size:16px;">-¿Como publico un anuncio en Sneakers-Shop?</p>
              <div class="pregunta-respuesta2" style="display: none;">
                <p>Para publicar un anuncio realiza los siguientes pasos:
                <ol>
                  <li>Hacé click en “Vender ahora”.</li>
                  <li>Completá la información sobre tu artículo (título, categoría, descripción, materiales, precio, fotos).</li>
                  <li>Una vez que hayas terminado, hacé click en “Publicar”.</li></p>
                </ol>
              </div>
            </div>

            <div style="border-bottom: 1px solid white;" class="pregunta3">
              <p style="font-size:16px;">-¿Porque no puedo publicar un articulo?</p>
              <div class="pregunta-respuesta3" style="display: none;">
                <p>Existen distintos motivos por los que Sneakers-Shop no deja publicar un articulo:
                <ol>
                  <li>Olvidaste poner un titulo, foto o caracteristica a la publicacion.</li>
                  <li>Utilizaste caracteres especiales en el titulo.</li>
                  <li>Utilzaste vocabulario inapropiado.</li></p>
                </ol>
              </div>
            </div>

            <div style="border-bottom: 1px solid white;" class="pregunta4">
              <p style="font-size:16px;">-¿Como edito mi publicacion?</p>
              <div class="pregunta-respuesta4" style="display: none;">
                <p>Para editar un anuncio realiza los siguientes pasos:
                <ol>
                  <li>Ve a la pestaña en la que aparece tu nombre de cuenta y accede a la seccion "Mis Publicaciones".</li>
                  <li>En esta seccion aparecera una lista de todos las publicaciones que hayas creado y en la parte derecha de cada uno aparecera un boton para poder editarlo.</li></p>
                </ol>
              </div>
            </div>

            <div style="border-bottom: 1px solid white;" class="pregunta5">
              <p style="font-size:16px;">-¿Como elimino mi publicacion?</p>
              <div class="pregunta-respuesta5" style="display: none;">
                <p>Para eliminar un anuncio realiza los siguientes pasos:
                <ol>
                  <li>Ve a la pestaña en la que aparece tu nombre de cuenta y accede a la seccion "Mis Publicaciones".</li>
                  <li>En esta seccion aparecera una lista de todas las publicaciones que hayas creado y en la parte derecha de cada uno aparecera un icono para poder eliminarlo.</li></p>
                </ol>
              </div>
            </div>

            <div style="border-bottom: 1px solid transparent;">
              <p style="font-size:16px;" class="pregunta6">-¿Por cuanto tiempo aparecen mis publicaciones en Sneakers-Shop?</p>
              <div class="pregunta-respuesta6" style="display: none;">
                <p>Todas las publicaciones que realices en nuestra pagina tienen una duracion de 30 dias, sin excepciones.</p>
              </div>
            </div>
        </div>

      <!-- COMPRAS -->
        <div class="compras" id="compras">
          <div><h1>Compras</h1></div>
            <div style="border-bottom: 1px solid transparent; border-top: 1px solid white;" class="compra">
              <p style="font-size:16px;">Formas de pago al comprar un producto:</p>
              <div class="compra-respuesta" style="display: none;">
                <p>Desde pagos con tarjeta de credito, efectivo, transferencia e incluso cheques. Dependiendo de las opciones que prefiera el vendedor o acuerde con el comprador. </p>
                <p>En algunas publicaciones también podrás elegir acordar el pago con el vendedor. Si pagas de esta forma, te recomendamos:</p>
                <ul>
                  <li>Evitar usar servicios de transferencia de dinero que no permitan verificar la identidad de tu contraparte.</li>
                  <li>Asegurarte de que el titular de la cuenta bancaria en la que vayas a depositar coincida con los datos de contacto del vendedor.</li>
                  <li>Guardar los comprobantes de pago.</li>
                  <li>No pagar una factura enviada por un vendedor. Al terminar la compra podrás imprimir tu propia factura.</li>
                </ul>
              </div>
            </div>
          </div>

      <!-- VENTAS -->
        <div class="ventas" id="ventas">
          <div><h1>Ventas</h1></div>
              <div style="border-bottom: 1px solid white; border-top: 1px solid white;" class="venta">
                <p style="font-size:16px;">Cómo vender de manera segura:</p>
                <div class="venta-respuesta" style="display: none;">
                  <p>Mirar la reputacion del comprador:</p>
                  <p>Puedes ver el puntaje que le dejaron otros vendedores haciendo clic en el nombre de usuario del comprador que te pregunte o te compre. Lee los comentarios para saber si:</p>
                  <ul>
                    <li>Se contactó a tiempo con los vendedores.</li>
                    <li>Les pagó el producto como habían acordado.</li>
                    <li>Cumplió con lo que habían pactado.</li>
                  </ul>
                  </p>
                </div>
              </div>
              <div style="border-bottom: 1px solid white;" class="venta2">
                <p style="font-size:16px;">Si ya te ofertaron en una publicación:
                <div class="venta-respuesta2" style="display: none;">
                  <p>Tene cuidado si:</p>
                  <ul>
                    <li>Está apurado o te pide que le envíes el producto antes de pagarte.</li>
                    <li>Quiere llevarse cualquier producto si ya no tienes stock del que compró.</li>
                    <li>Cambia de dirección o modo de envío.</li>
                    <li>No te da un teléfono fijo donde puedas contactarlo.</li>
                    <li>Los datos que te dio no coinciden con los que tiene en el sitio.</li>
                  </ul>
                  </p>
                </div>
              </div>
              <div style="border-bottom: 1px solid transparent;" class="venta3">
                <p style="font-size:16px;">Tomá la iniciativa:</p>
                <div class="venta-respuesta3" style="display: none;">
                  <p>Si pasan unos dias y no te contacta, llamalo vos para encaminar la venta.</p>
                </div>
              </div>
          </div>
        </div>

      <!-- REGLAS -->
        <div class="reglas" id="reglas">
          <div><h1>Reglas</h1></div>
            <div style="border-bottom: 1px solid transparent; border-top: 1px solid white;" class="regla">
              <p style="font-size:16px;">Las siguientes reglas deben ser respetadas al publicar un anuncio en Sneakers-Shop:</p>
              <div class="regla-respuesta" style="display: none;">
                <ul>
                  <li>Todos los anuncios tienen que tener fotos relevantes del artículo que estás ofreciendo. No publiques imágenes pixeladas, poco nítidas o demasiado pequeñas; tampoco publiques imágenes de Internet.</li>
                  <li>Todos los anuncios tienen que publicarse con una dirección de correo válida. Tené en cuenta que muchos compradores pueden enviarte mensajes de correo. Además, desde Sneakers-Shop te vamos a escribir a esa misma dirección siempre que tengamos que enviarte comunicaciones importantes.</li>
                  <li>Todos los productos que publiques deben encontrarse dentro de Argentina.</li>
                  <li>El contenido de los anuncios debe ser claro y no debe ser ofensivo.</li>
                  <li>La descripción de los anuncios debe ser clara y concisa (280 caracteres como maximo). Pensá como comprador, ¿qué información necesitarías conocer sobre el artículo para poder comprarlo?</li>
                </ul>
              </div>
            </div>
        </div>

        <!-- pie de pagina -->
          <footer class="pie">
            <ul>
              <span style="font-size: 15px; float: left; margin-top: 4px;color: black;">&copy; 2016 SneakerShop.com</span>
              <li><a href="home">Home</a></li>
              <li style="border-right: none;"><a href="register">Registro</a></li>
              <a target="_blank" href="https://twitter.com/"><img src="images/index/icon-twitter.ico" class="icon-twitter"/></a>
              <a target="_blank" href="https://www.facebook.com/"><img src="images/index/icon-facebook.ico" class="icon-facebook"/></a>
            </ul>
          </footer>

        <!-- esto va aca abajo para que primero se cargue toda la estructura de la pagina junto con el css si es que tiene y despues cargen los script -->
        <script src=js/faq-jquery.js></script>
  </body>
</html>
