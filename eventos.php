<?php
/**
 * @Author: Miguel González Aravena
 * @Email: miguel.gonzalez.93@gmail.com
 * @Github: https://github.com/MiguelGonzalezAravena
 * @Date: 2016-10-28 01:43:28
 * @Last Modified by: Miguel GonzÃ¡lez Aravena
 * @Last Modified time: 2016-10-28 02:21:03
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Proyecto para enseñar el funcionamiento de un formulario en PHP">
  <meta name="keywords" content="html, bootstrap, php, formulario, desarrollo, web">
  <meta name="author" content="Miguel González Aravena">
  <title>Eventos en jQuery</title>
  <!-- Dependencias CSS -->
  <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container">
  <h1>Eventos en jQuery</h1>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Eventos</h3>
    </div>
    <div class="panel-body">
      <!-- Evento clic -->
      <button id="eventoClic" class="btn btn-primary">
        <i class="glyphicon glyphicon-hand-up"></i>
        Haz clic aquí
      </button>
      <div style="margin: 10px"></div>
      <div id="mensajeEventoClic" class="alert alert-info" style="display: none">
        <i class="glyphicon glyphicon-fire"></i>
        Soy un mensaje secreto
      </div>
      <hr />
      <!-- Evento MouseOver -->
      <button id="eventoMouseOver" class="btn btn-primary">
        <i class="glyphicon glyphicon-hand-up"></i>
        Acerca el mouse por aquí
      </button>
      <div style="margin: 10px"></div>
      <div id="mensajeEventoMouseOver" class="alert alert-info" style="display: none">
        <i class="glyphicon glyphicon-fire"></i>
        Soy un mensaje que está debajo de tu mouse
      </div>
      <hr />
      <div class="form-group">
        <label>Escribe en el siguiente campo: </label>
        <input type="text" class="form-control" id="campo" name="campo" />
        <div id="mensajeEventoKeyDown" class="alert alert-info" style="display: none">
          <i class="glyphicon glyphicon-fire"></i>
          Soy un mensaje que aparece al teclear
        </div>
      </div>
      <hr />
      <div class="form-group">
        <label>Haz clic en el siguiente campo: </label>
        <input type="text" class="form-control" id="campo_2" name="campo_2" />
        <div id="mensajeEventoFocus" class="alert alert-info" style="display: none">
          <i class="glyphicon glyphicon-fire"></i>
          Soy un mensaje que aparece al entrar dentro de este input
        </div>
      </div>
      <hr />
      <div class="form-group">
        <button id="eventoMagia" class="btn btn-success">
          Soy un botón que hace magia
        </button>
      </div>
      <hr />
    </div>
  </div>
</div>
<!-- Dependencias JS -->
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-validation/dist/jquery.validate.js"></script>
<script type="text/javascript" src="assets/js/events.js"></script>
</body>
</html>