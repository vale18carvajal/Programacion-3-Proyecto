<footer class="row">
  <div class="col-md-6 col-lg-4 empresa">
    <img id="logo-f" class="mx-auto d-block" src="img/logo-blanco.png" alt="Logo de la empresa">
  </div>
  <div class="col-md-6 col-lg-4 contactos">
    <h4>Contactos</h4>
    <div class="d-flex align-align-items-center justify-content-center f-info"><img src="img/email.png" alt="íncono de correo"><a href="">vende_tu_inmueble@vtm.com</a></div>
    <div class="d-flex align-align-items-center justify-content-center f-info"><img src="img/telefono.png" alt="íncono de teléfono"><a href="">506-2222-222</a></div>
    <div class="d-flex align-align-items-center justify-content-center f-info"><img src="img/whatsaap.png" alt="íncono de Whatsapp"><a href="">Whatsapp</a></div>
    <div class="d-flex align-align-items-center justify-content-center f-info">
      © 2024 Vende tu Inmueble S.A. Todos los derechos reservados.
    </div>
  </div>
  <div class="col-md-6 col-lg-4 social">
    <h4>Redes Sociales</h4>
    <a target="_blank" href="https://www.facebook.com/InmueblesEnCostaRica/"><img src="img/facebook.png" alt="Link para cuenta de FACEBOOK"></a>
    <a target="_blank" href="https://www.instagram.com/inmueblescr?igsh=MXNpYzE5aHNvZGRrZg=="><img src="img/instagram.png" alt="Link para cuenta de INSTAGRAM"></a>
    <a target="_blank" href="https://www.youtube.com/@omegacostarica"><img src="img/youtube.png" alt="Link para cuenta de YOUTUBE"></a>
  </div>

</footer>
<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<!-- JQuery y validaciones -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php
if ($url == "inicio-sesion" || $url == "contactenos" || $url == "detalles-usuario" || $url == "detalles-propiedad") {
  echo '<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>';
}
?>

<!-- CDN DE QRCODEJS -->
<?php
if ($url == "detalle-inmueble" ){
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
}
?>

<!-- CDN DE html2pdf -->
<?php
if ($url == "reportes") {
   echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"
   integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg=="
   crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
}
?>

<script src="js/<?php echo $url ?>.js"></script>
<script src="js/header.js"></script>


<!-- Para iconos -->
<script src="https://kit.fontawesome.com/97cef9f55a.js" crossorigin="anonymous"></script>
<!-- Para alertas -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>