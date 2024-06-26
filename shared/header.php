<?php
//Obtener el nombre del archivo que se abre.
$url = basename($_SERVER["PHP_SELF"], ".php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="Inmueble, venta, rente, casas, propiedad, propiedades">
  <title>Vende tu Inmueble S.A.</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Hoja de estilos -->
  <link rel="stylesheet" href="css/<?php echo $url ?>.css">
</head>

<body class="container-fluid">
  <header class="row">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img id="logo-nav" src="img/logo-blanco.png" alt="Logo de la empresa"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="inmuebles.php">Propiedades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ubicaciones.php">Ubicación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactenos.php">Contáctenos</a>
            </li>
            <li id="perfilUsuario" class="nav-item">
              <a class="nav-link" href="inicio-sesion.php">Inicio de Sesión</a>
            </li>
          </ul>
          <div class="d-flex align-items-center icono">
            <a hidden class="nav-link" href="perfil-usuario.php"><img src="img/iconoUsuario.png" alt="Icono usuario">Mi perfil</a> 
          </div>
        </div>
      </div>
    </nav>
  </header>