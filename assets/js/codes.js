/*
* @Author: Miguel González Aravena
* @: miguel.gonzalez.93@gmail.com
* @Github: https://github.com/MiguelGonzalezAravena
* @Date: 2016-10-27 21:17:53
* @Last Modified by: Miguel GonzÃ¡lez Aravena
* @Last Modified time: 2016-10-28 01:42:10
*/

// Función botón volver
function Volver() {
  // Esconder error
  $('#mensaje').hide('fast');

  // Mostrar formulario
  $('#formulario').show('slow');
}

$(document).ready(function() {
  $.validator.setDefaults({
    debug: true
  });

  // Validador de jQuery
  // En donde se configura los parámetros a enviar (submitHandler)
  // Se definen los campos que son requeridos (rules)
  // Se definen los mensaje de error de los campos requeridos (messages)
  // 
  $('#formulario').validate({
    submitHandler: function(form) {
      // Enviar formulario por método AJAX
      // Configuración
      $.ajax({
        url: 'enviar.php',
        method: 'POST',
        data: {
          titulo: $('#titulo').val(),
          unidad: $('#unidad').val(),
          terminos: $('#terminos').val(),
          contenido: $('#contenido').val()
        }
      })
      .fail(function(jqXHR, textStatus, errorThrown) {
        // Función en caso de error
        console.log('Valor de jqXHR: ');
        console.log(jqXHR);
        console.log('Valor de textStatus: ');
        console.log(textStatus);
        console.log('Valor de errorThrown: ');
        console.log(errorThrown);
        alert('Error encontrado: ' + errorThrown);
      })
      .done(function(data, textStatus, jqXHR) {
        // Función en caso de que está todo OK
        // Agregar contenido de la respuesta de enviar.php
        // al elemento con id 'mensaje'
        $('#mensaje').hide('fast').html(data).show('slow');
        // Esconder formulario
        $('#formulario').hide('fast');
      })
      ;
    },
    errorClass: 'has-error',
    onfocusout: function(element) {
      $(element).valid();
    },
    onsubmit: function(element) {
      $(element).valid();
    },
    rules: {
      titulo: {
        required: true
      },
      correo: {
        required: true,
        excede: true
      },
      contrasena: {
        required: true,
        minlength: 6
      },
      foto: {
        required: true
      },
      descripcion: {
        required: true,
        minlength: 10
      },
      anio: {
        required: true
      },
      sexo: {
        required: true
      },
      terminos: {
        required: true
      }
    },
    messages: {
      nombre: 'Por favor, ingrese el nombre',
      unidad: {
        required: 'Por favor, ingrese su correo electrónico',
        excede: 'El correo electrónico no tiene un formato adecuado'
      },
      contrasena: {
        required: 'Por favor, ingrese su contraseña',
        minlength: $.validator.format('La contraseña debe tener al menos {0} caracteres')
      },
      foto: {
        required: 'Por favor, seleccione su foto de perfil'
      },
      descripcion: {
        required: 'Por favor, ingrese una pequeña descripción',
        minlength: jQuery.validator.format('La descripción debe tener al menos {0} caracteres')
      },
      anio: {
        required: 'Por favor, seleccione un año de ingreso'
      },
      sexo: {
        required: '[Por favor, seleccione su sexo]'
      },
      terminos: {
        required: '[Para seguir, debes aceptar los términos y condiciones]'
      }
    }
  });
});