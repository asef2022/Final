<?php
include_once("../config/config.php");
include("estado.php");

$p = new estado();


if (isset($_POST) && !empty($_POST)) {
  
  $save = $p->save($_POST);
  if ($save){
    $mensaje = '<div class="alert alert-success"> Información Registrada </div>';
  } else{
    $mensaje = '<div class="alert alert-danger" role="alert"> Error de Registro </div>';
  }
}

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<title>Crear Solicitud</title>
<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<?php include('../menu.php') ?>
<h3 class="text-center mb-2">Solicitar Estados Financieros</h3>  
<div class="container d-flex aligth-content-center" >
<?php
  if(isset($mensaje)){
    echo $mensaje;
  }
  ?>

<form method="POST" enctype="multipart/form-data">
<div class="row">
<div class="col">
    <input type="text" name="empresa" id="empresa" placeholder="Nombre Empresa" class="form-control"/>
  </div>
  <div class="col">
  <input type="number" name="nit" id="nit" placeholder="Numero de NIT" class="form-control"/>
  </div>
  <div class="col">
  <input type="email" name="correo" id="correo" placeholder="Correo para Enviar" class="form-control"/>
  </div>
  <div class="row">
  
  <div class="col">
<label>Fecha de corte<input type="date" name="corte" id="corte" placeholder="corte" class="form-control"/></label>
  </div>
    
  <div class="col">
  <label for="">Destino de los Estados</label>
    <input type="text" name="comentario" id="comentario" placeholder="comentario" class="form-control"/>
  </div>
  </div>
</div>
<br>
<button class="btn btn-success">Enviar</button> 

</form>

  </div>

</body>
