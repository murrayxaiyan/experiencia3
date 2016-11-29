/*
* @Author: Miguel González Aravena
* @Email: miguel.gonzalez.93@gmail.com
* @Github: https://github.com/MiguelGonzalezAravena
* @Date: 2016-10-28 01:47:04
* @Last Modified by: Miguel GonzÃ¡lez Aravena
* @Last Modified time: 2016-10-28 02:20:13
*/
// Evento que se ejecuta una vez que el documento haya cargado (HTML)
$(document).ready(function() {

  // Asignar evento al elemento con id 'eventoClic'
   $('#eventClic').click(function(){
    var elem = $('#mensajeEv');
    if(elem.css('display') == 'none'){


    elem.show('slow');

    $('#Color').click(function(){
      //$("p")
      document.getElementsByTagName("p")[0].setAttribute("class", "democlass");
    })
  }else{
    elem.hide('slow');
  }
  });

  $('#eventM').click(function(){
    $.get("procesar.php", function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });

  // Asignar evento al elemento con id 'eventoMouseOver'
  $('#eventoMouseOver')
  .mouseover(function() {
    // Obtengo el elemento donde irá el mensaje
    // y lo almaceno en una variable
    var elem = $('#mensajeEventoMouseOver');

    // Mostrar
    elem.show('slow');
  })
  .mouseout(function() {
    // Obtengo el elemento donde irá el mensaje
    // y lo almaceno en una variable
    var elem = $('#mensajeEventoMouseOver');

    // Esconder
    elem.hide('slow');
  });

  // Evento al escribir en el campo con id 'campo'
  $('#campo')
  .keydown(function() {
    // Obtengo el elemento donde irá el mensaje
    // y lo almaceno en una variable
    var elem = $('#mensajeEventoKeyDown');

    // Mostrar
    elem.show('slow');
  })
  // Evento al 'salir' del campo
  .blur(function() {
    // Obtengo el elemento donde irá el mensaje
    // y lo almaceno en una variable
    var elem = $('#mensajeEventoKeyDown');

    // Esconder
    elem.hide('slow');
  });

  // Evento al 'entrar' en el campo con id 'campo_2'
  $('#campo_2')
  .focus(function() {
    // Obtengo el elemento donde irá el mensaje
    // y lo almaceno en una variable
    var elem = $('#mensajeEventoFocus');

    // Mostrar
    elem.show('slow');
  })
  .blur(function() {
    // Obtengo el elemento donde irá el mensaje
    // y lo almaceno en una variable
    var elem = $('#mensajeEventoFocus');

    // Esconder
    elem.hide('slow');
  });

  // Botón que acciona la acción 'clic' de
  // otro botón (con id 'eventoClic')
  $('#eventoMagia').click(function() {
    // Gatillar el evento clic del 
    // elemento 'eventoClic'
    $('#eventoClic').trigger('click');
  });
});