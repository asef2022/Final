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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../Stylos/Stylo2.css">


</head>
<body>
   <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: rgb(4, 79, 241, 0.816);">
      <!-- <nav class="navbar navbar-expand-lg" style="background-color: #0685e0;"> -->
      <!-- Ajuste Color Fondo Barra -->

      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../imagenes/LogoAsef2020.jpg" class="img-logo" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.html">INICIO</a> <!-- Enlace Activo -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Servicios.html">SERVICIOS</a> <!-- Enlace a Pagina Servicios -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Normas.html">NORMAS</a> <!-- Enlace a Pagina Normas -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contactos/index.php">CONTACTO</a> <!-- Enlace a Form Contaco -->
            </li>
            <li class="nav-item dropdown">
              <!-- Menú desplegable -->
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                ZONA CLIENTES
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../Tutoriales.html">Tutoriales</a></li>
                <li><a class="dropdown-item" href="./Solicit.html">Solicitudes</a></li>
                <li><a class="dropdown-item" href="./Calendarios.html">Calendarios</a></li>
                <li><a class="dropdown-item" href="./Recursos.html">Recursos</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br><br> 

<br><br>
<div class="container bg-info px-3">

<h3 class="text-center mb-2">CONTÁCTENOS</h3>  
<h6 class="text-center bg-warning"> <strong> Si desea contratar o conocer más de nuestros servicios, diligencie sus datos y uno
      de nuestros Asesores lo
      contactará oportunamente</strong></h6>
<div class="users-form"> 
    <form action="insert_user.php" method="POST"> 

<div class="col-10">
  <label for="Enombre" class="form-label">Nombre</label>
  <input type="text" class="form-control" name="nombre" placeholder="Digite su nombre">
</div>
    <div class="col-6">
<label for="Ecorreo" class="form-label">Correo</label>
  <input type="email" class="form-control" name="correo" placeholder="name@example.com">
  </div>
  <div class="col-6">
  <label for="Etelefono" class="form-label">Wasapp</label>
  <input type="Enumber" class="form-control" name="telefono" placeholder="celular o wasapp">
  </div>
<div class="col-10">
  <label for="mensaje" class="form-label">Mensaje</label>
  <textarea class="form-control" name="mensaje" placeholder="Deje aqui su mensaje o inquietud" rows="2"></textarea>
  <br>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<input class="btn btn-dark btn-lg" type="submit" value="Enviar">
<a href="../index.html" class="btn btn-danger btn-lg" role="button">CERRAR</a>
</div>
<br>

</div>
</div>


<br><br><br><br><br><br>


</body>
<!-- FOOTER -->
<footer class="bg-gradient" style="background-color: rgb(48, 175, 173);">
  <!-- fondo oscuro y degradado -->

  <div class="d-flex align-conten center">
    <!-- d-flex organixar elmentos y align para alineacion-->

    <div class="container mt-4">
      <!-- Grilla   (mt-4 margen)-->
      <div class="row justify-content-center">
        <div class="col">
          <img src="../Imagenes/LogoAsef2020.jpg" width="100" height="60" alt="logo" /> <!-- medidas personalizadas -->
          <h6>Encuentrános</h6>
        </div>
        <div class="col text-center">
          <img src="../Imagenes/LogoEmail3.png" class="img-pie" alt="email" /> <!-- utiliza clase hoja stylo2 -->
          <p><small>asesorias@yahoo.com</small></p>
        </div>
        <div class="col text-center">
          <img src="../Imagenes/LogoWasap2.png" class="img-pie" alt="wasap" />
          <p><small>3507262626</small></p> <!-- Texto pequeño -->
        </div>
        <div class="col text-center">
          <img src="../Imagenes/LogoYoutube3.png" class="img-pie" alt="Youtube" />
          <p><small>@asesoriasasef7567</small></p>
        </div>
        <div class="col v-line text-center"> <!-- v-line define linea vertical en stylo2  -->
          <a title="Dian" href="https://muisca.dian.gov.co/WebArquitectura/DefLoginOld.faces" target="_blank"><img
              src="../Imagenes/LogoDian.png" class="img-pie" alt="Dian" /></a>
        </div>
        <div class="col text-center">
          <a title="Camara" href="https://www.ccb.org.co/" target="_blank"><img src="../Imagenes/LogoCamara.png"
              class="img-pie" alt="Camara" /></a> <!-- Imagen con enlace nueva pestaña -->
        </div>
        <div class="col text-center">
          <a title="Shd" href="https://oficinavirtual.shd.gov.co/OficinaVirtual/login.html" target="_blank"><img
              src="../Imagenes/LogoIca.jfif" width="80" height="60" alt="Shd" /></a>
        </div>
        <div class="col text-center">
          <a title="Siigo" href="https://siigonube.siigo.com/ISIIGO2/Login.aspx?ReturnUrl=%2fISIIGO2%2fDefault.aspx"
            target="_blank"><img src="../Imagenes/LogoSiigo.png" class="img-pie" alt="Siigo" /></a>
        </div>
        <div class="col text-center">
          <a title="Xubio" href="https://xubio.com/NXV/newLogin" target="_blank"><img src="../Imagenes/LogoXubio.png"
              class="img-pie" alt="Xubio" /></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <p class="text-center"><strong>Derechos Reservados Asesorías Empresariales ASEF Sas</strong></p>
      </div>
      <div class="col">
        <p class="text-center"><strong>ACCESO A SITIOS FRECUENTES</strong></p><!-- Texto negrilla y centrado -->
      </div>
    </div>
  </div>
  </div>



  </div>





</footer>

</html>