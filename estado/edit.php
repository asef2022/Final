<?php
include("../config/config.php");
include("estado.php");

$p = new estado();
$dp = mysqli_fetch_object ($p->getOne($_GET['id']));
$date = new DateTime($dp->corte);
if (isset($_POST) && !empty($_POST)) {
    
    $update = $p->update($_POST);
    if ($update){
      $mensaje = '<div class="alert alert-success"> Información Modificada con éxito</div>';
    } else{
      $mensaje = '<div class="alert alert-danger"> Error en Modificación </div>';
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
<h3 class="text-center mb-2">Modificar Solicitud</h3>  
<div class="container d-flex aligth-content-center" >
<?php
  if(isset($mensaje)){
    echo $mensaje;
  }
  ?>

<form method="POST" enctype="multipart/form-data">
<div class="row">
<div class="col">
    <input type="text" name="empresa" id="empresa" placeholder="Nombre Empresa" value="<?= $dp->empresa ?> "class="form-control"/> 
  </div>
  <input type="hidden" ID="id" name="id" value="<?= $dp->id ?>"/>
  <div class="col">
  <input type="number" name="nit" id="nit" placeholder="Numero de NIT" value="<?= $dp->nit ?>" class="form-control"/>
  </div>
  <div class="col">
  <input type="email" name="correo" id="correo" placeholder="Correo para Enviar" value="<?= $dp->correo ?> "class="form-control"/>
  </div>
  <div class="row">
  
  <div class="col">
<label>Fecha de corte<input type="date" name="corte" id="corte" placeholder="corte" value="<?= $date->format('Y-m-d') ?>"class="form-control" >
  </div>
    
  <div class="col">
  <label for="">Si desea deje algun comentario</label>
    <input type="text" name="comentario" id="comentario" placeholder="comentario" value="<?= $dp->comentario ?>" class="form-control"/>
  </div>
  </div>
</div>
<br>
<button class="btn btn-success">Modificar</button> 

</form>

  </div>

</body>