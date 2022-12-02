<?php
include_once("../config/config.php");
include("estado.php");

$p = new estado();
$data = $p->getAll();

if ( isset($_GET['id']) && !empty($_GET['id'])) {
    $remove = $p->delete($_GET['id']);
    if ($remove){
      header('Location: index.php');
    } else{
      $mensaje = '<div class="alert alert-danger" role="alert"> Error al Eliminar </div>';
    }
}


?>
<!DOCTYPE html>
<html>
   <head>
   <meta charset="UTF-8" />
   <title>Lista de Solicitudes</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
   
   <body>
   <?php include('../menu.php') ?>
   <div class="container">
    <h3 class="text-center mb-2">Solicitud de Estados Financieros</h3>
   

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Empresa</th>
      <th scope="col">Nit</th>
      <th scope="col">Correo</th>
      <th scope="col">Corte</th>
      <th scope="col">Destino</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
 
    

        <?php
        while($p = mysqli_fetch_object($data) ){
           
          echo "     <tr>
          <th scope='row'> $p->id</th>
          <td>$p->empresa</td>
          <td>$p->nit</td>
          <td>$p->correo</td>
          <td>$p->corte</td>
          <td>$p->comentario</td>
          <td> <div class='center'> <a class='btn btn-success' href='edit.php?id=$p->id' >Modificar</a> - <a class='btn btn-danger' href='index.php?id=$p->id' >Eliminar</a> </div></td>
        </tr>  ";
        }

        ?>

</tbody>
</table>
    </div>

   </div>

   </body>
</html>
