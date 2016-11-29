<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Proyecto para enseñar el funcionamiento de un formulario en PHP">
  <title>Arriendo de Películas</title>
  <!-- Dependencias CSS -->
  <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container">
  <h1>Formulario en PHP</h1>
  <!-- Mensaje de respuesta -->
  <div id="mensaje" style="display: none"></div>
  <!-- Formulario -->
  <form id="formulario">
    <!-- Hidden -->
    <input type="hidden" name="enviado" value="1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Formulario</h3>
      </div>
      <div class="panel-body">
        <!-- Texto -->
        <div class="form-group">
          <b>Titulo de película</b>
          <input type="text" class="form-control" name="pelicula" id="pelicula" placeholder="Titulo de película" required>
        </div>
        <!-- Password -->
        <div class="form-group">
          <b>Unidades</b>
          <input type="number" class="form-control" name="unidad" id="unidad" placeholder="Unidades" required>
        </div>
        <div class="form-group">
          <b>Instrucciones de Despacho</b><br />
          <textarea class="form-control" name="instrucciones" id="instrucciones" placeholder="Indique claramente las instrucciones" required></textarea>
        </div>
      </div>
      <div class="panel-footer">
        <div class="text-right">
          <a href="./" class="btn btn-primary">
            <i class="glyphicon glyphicon-repeat"></i>
            Limpiar
          </a>
          <!-- Button submit -->
          <button type="submit" class="btn btn-success">
            Arrendar
            <i class="glyphicon glyphicon-menu-right"></i>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>
<script>
document.getElementById("pelicula").addEventListener("focusout", myFunction);
function myFunction() {
    var x = document.getElementById("pelicula").value;
    var str1 = "matrix";
    var str2 = "psicosis";
    if ((x.localeCompare(str1)==0)||(x.localeCompare(str2)==0)) {
    } else {
        document.getElementById('pelicula').value = "";
    }
}
</script>
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-validation/dist/jquery.validate.js"></script>
<script type="text/javascript" src="assets/js/codes.js"></script>
</body>
</html>