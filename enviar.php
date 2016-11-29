<?php
/**
 * @Author: Miguel González Aravena
 * @Email: miguel.gonzalez.93@gmail.com
 * @Github: https://github.com/MiguelGonzalezAravena
 * @Date: 2016-10-12 01:23:21
 * @Last Modified by: Miguel GonzÃ¡lez Aravena
 * @Last Modified time: 2016-10-28 01:41:38
 */

// Función para evitar inyecciones
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

// Variables
$directorio = 'C:/wamp/www/FormularioPHP/assets/';
$foto = isset($_FILES['foto']) ? $_FILES['foto'] : '';
if(!empty($foto)) {
  $extension = explode('.', $foto['name']);
  $nombre_foto = time() . '.' . $extension[1];
  $foto_subida = $directorio . basename($nombre_foto);
}

$enviado = isset($_POST['enviado']) ? (int) $_POST['enviado'] : 0;
$pelicula = isset($_POST['pelicula']) ? Filtro($_POST['pelicula']) : '';
$unidad = isset($_POST['unidad']) ? Filtro($_POST['unidad']) : '';
$instrucciones = isset($_POST['instrucciones']) ? Filtro($_POST['instrucciones']) : '';
$error = '';

// Mostrar contenido
if($enviado == 1 && $contenido == 1) {
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
  exit;
} else if(empty($pelicula)) {
  $error = 'Por favor, ingrese el titulo';
} else if(empty($unidades)) {
  $error = 'Por favor, ingrese unidades';
} else if(empty($instrucciones)) {
  $error = 'Por favor, ingrese su contraseña.';
}

// Vista de error
if(!empty($error)) {
?>
<div class="alert alert-info">
  <i class="glyphicon glyphicon-info-sign"></i>
  <?php echo $error; ?>
</div>
<a onclick="Volver();" class="btn btn-warning">
  <i class="glyphicon glyphicon-chevron-left"></i>
  Volver
</a>
<?php
// Vista de éxito
} else {
  if(!empty($foto)) {
    // Subir imagen
    move_uploaded_file($foto['tmp_name'], $foto_subida);
  }
?>
  <h3>¡Formulario enviado satisfactoriamente!</h3>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Datos enviados</h3>
    </div>
    <div class="panel-body">
      <p>Arrendaste <b><?php echo $pelicula; ?></b>,</p>
      <p>para despachar con las instrucciones: <b><?php echo $instrucciones; ?></b>, <b><?php echo $unidad; ?></b></p>
      <!-- p>
        Tu foto de perfil es: <br />
        <img src="./assets/<?php echo $nombre_foto; ?>" class="thumbnail">
      </p -->
    </div>
    <div class="panel-footer">
      <div class="text-right">
        <a href="./" class="btn btn-primary">
          <i class="glyphicon glyphicon-chevron-left"></i>
          Volver
        </a>
      </div>
    </div>
  </div>
<?php } ?>