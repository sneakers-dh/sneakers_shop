window.onload = function() {
    // obtenemos el elemento formulario por medio de su ID
    var form = document.getElementById('formulario');

    // al ejecutar el evento submit el formulario envía los datos al documento que tiene en el atributo action.
    // si no hay un atributo action no manda el formulario.
    form.onsubmit = function(evento) {
        // por medio del preventDefault cortamos la ejecución del evento submit
        // evento.preventDefault();
        var elementoTitulo = document.getElementById('titulo');
        var elementoPrecio = document.getElementById('precio');
        var elementoDescripcion = document.getElementById('descripcion');


        // por medio del siguiente if y else if validamos los campos.
          if (elementoTitulo.value.length < 10 && elementoPrecio.value.length === 0 && elementoDescripcion.value.length === 0) {
            document.getElementById('carteltitulo').innerHTML = "El producto debe tener un nombre de al menos 10 caracteres";
            document.getElementById('cartelprecio').innerHTML = 'El producto debe tener un precio';
            document.getElementById('carteldescripcion').innerHTML = 'El producto debe tener una decripcion';
        }
        if (elementoTitulo.value.length > 10) {
          document.getElementById('carteltitulo').style.display = "none";
        } else if (elementoTitulo < 10) {
          document.getElementById('carteltitulo').innerHTML = "El producto debe tener un nombre de al menos 10 caracteres";
        }

        if (elementoPrecio.value.length != 0) {
          document.getElementById('cartelprecio').style.display = "none";
        } else if (elementoPrecio.value.length === 0) {
          document.getElementById('cartelprecio').innerHTML = 'El producto debe   tener un precio';
        }

        if (elementoDescripcion.value.length != 0) {
          document.getElementById('carteldescripcion').style.display = "none";
        } else if (eelementoDescripcion.value.length === 0) {
          document.getElementById('carteldescripcion').innerHTML = 'El producto debe tener una decripcion';
        }
    }
}

function cuenta(){
    document.forms[1].caracteres.value=document.forms[1].texto.value.length
}

function contador (campo, cuentacampo, limite) {
if (campo.value.length > limite) campo.value = campo.value.substring(0, limite);
else cuentacampo.value = limite - campo.value.length;
}
