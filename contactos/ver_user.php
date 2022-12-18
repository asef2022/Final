<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM nuevos";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Contactos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../Stylos/Stylo2.css">
</head>

<body>
<nav class="navbar navbar-expand navbar-dark bg-primary mb-5">
    <ul class='navbar-nav'>
        <li class="nav-item">
            <a class="nav-link" href="../admin2.html">Cerrar Cesion</a>
        </li>
    </ul>
</nav>

<div class="container px-3 col-10">
    <h5 class="text-center bg-info">CONTACTOS REGISTRADOS</h5>
<table class="table align-middle table-ligth table-striped table-bordered">
<thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Mensaje</th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php while($row = mysqli_fetch_array($query)): ?>


        <tr>
        <th><?= $row['id'] ?> </th>
        <th><?= $row['nombre'] ?> </th>
        <th><?= $row['correo'] ?> </th>
        <th><?= $row['telefono'] ?> </th>
        <th><?= $row['mensaje'] ?> </th>

        <th><a href="delete_user.php?id=<?= $row['id'] ?>">Eliminar</a></th>
        </tr>
        <?php endwhile; ?>
    </tbody>

</table>

  
  </div>


</body>
</html>