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
    <title>Contactos</title>
</head>
<body>
    
<div>
    <form action="insert_user.php" method="POST">
        <h3>DATOS DEL CONTACTO</h3>
        <label >Nombre <input type="text" name="nombre"></label> 
        <label >Correo <input type="correo" name="correo"></label>
        <label >Telefono <input type="number" maxlength="20" name="telefono"></label>
        <label >Mensaje <input type="text" name="mensaje"></label>


        <input type="submit" value="Enviar" >


    </form>
</div>    


<div>
    <h5 class=text-center>Ver Contactos</h5>
<table>
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