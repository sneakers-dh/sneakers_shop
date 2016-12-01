<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="../TrabajoIntegrador/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../TrabajoIntegrador/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/styles2.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sneakers-Shop | Registro</title>
  </head>
  <body>

    <!-- encabezado de pagina -->

    <header>
      <div class="encabezado">
        <div>
          <a href="/" class="logo"><img src="/images/logosneakers.png"/></a>
        </div>
        <ul>
          <li><abbr title="Ayuda"><a href="ayuda" target="new"><i class="material-icons" style="border-right: none;">info</i></a></abbr></li>
        </ul>
      </div>
    </header>

      <!-- aviso de ingreso -->

      <div class="caja">
          <div class="caja-ingreso">
        <h2 class="inline-title texto">¿Ya tenes cuenta?</h2>
        <a href="/" class="boton">Ingresa</a>
          </div>
      </div>

      <!-- contenedor de registro -->

      <div class='registro'>
        <h2>Registro</h2>
        <form id='register' action='' method='post' accept-charset='UTF-8' enctype="multipart/form-data">
          {{ csrf_field() }}
          <div "{{ $errors->has('name') ? ' has-error' : '' }}">
            <input id="name" name='name' placeholder='Nombre y Apellido' type='text' value='{{ old('name') }}' required autofocus/>

            @if ($errors->has('name'))
              <span>
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>

          <div "{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" name='email' placeholder='Ingrese Email' type='email' value="{{ old('email') }}" required />

            @if ($errors->has('email'))
              <span>
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>

          <div "{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id='password' name='password' placeholder='Ingrese Contraseña' type='password' required/>

            @if ($errors->has('password'))
              <span>
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>


          <input id='password-confirm' name='password_confirmation' placeholder='Repita Contraseña' type='password'/ required>
          <div class="container">
            <input type='submit' value='Registrar'/>
            <input type="reset" value="Limpiar Campos">
          </div>
          <h4 style="margin-bottom: 0px; text-align: center;"><a href="index.php" style="padding: 0px 20px;">Volver a la pagina principal</a></h4>
          <div class="cartel-contador">
          </div>
        </form>
      </div>

      <!-- pie de pagina -->

      <footer class="pie">
        <ul>
          <span style="font-size: 15px; float: left; margin-top: 4px;">&copy; 2016 SneakerShop.com</span>
          <li><a href="/">Home</a></li>
          <li style="border-right: none;"><a href="ayuda">FAQ</a></li>
					<a href="https://twitter.com/"><img src="images/index/icon-twitter.ico" class="icon-twitter"/></a>
					<a href="https://www.facebook.com/"><img src="images/index/icon-facebook.ico" class="icon-facebook"/></a>
				</ul>
      </footer>


    <!-- esto va aca abajo para que primero se cargue toda la estructura de la pagina junto con el css si es que tiene y despues cargen los script -->
    <script src="javascript/validacion-register.js"></script>
    <!-- <script src="javascript/ajax-register.js"></script> -->
  </body>
</html>
