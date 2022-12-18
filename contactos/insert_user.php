<?php
include('connection.php');
$con = connection();

$id = null;
$nombre = $_POST ['nombre'];
$correo = $_POST ['correo'];
$telefono = $_POST ['telefono'];
$mensaje = $_POST ['mensaje'];

$sql = "INSERT INTO nuevos VALUES ('$id', '$nombre',  '$correo', $telefono, '$mensaje')";
$query = mysqli_query($con, $sql);

if($query){
    Header ("Location: index.php");
};


?>


