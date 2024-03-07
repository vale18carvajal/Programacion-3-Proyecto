<?php
//Obtener el nombre del archivo que se abre.
  $url = basename($_SERVER["PHP_SELF"],".php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Inmueble, venta, rente, casas, propiedad, propiedades">
    <title>Vende tu Inmueble S.A.</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="css/<?php echo $url?>.css">
</head>
<body class="container-fluid">
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                <a class="nav-link active" aria-current="page" href="#">Propiedades</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ubicación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactenos.php">Contáctenos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Inicio de Sesión</a>
              </li>
            </ul>
            <div class="d-flex align-items-center icono">
              <a class="nav-link" href="#"><img src="img/iconoUsuario.png" alt="Icono usuario"></a> Mi perfil
            </div>
          </div>
        </div>
      </nav>
    </header>