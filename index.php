<?php include "shared/header.php" ?>
<main>
  <div class="contenedor-titulo">
    <!--<video src="https://i.imgur.com/J1hUeTH.mp4" autoplay="true" muted="true" loop="true" poster="https://carontestudio.com/img/contacto.jpg"></video>-->
  </div>

  <div class="row titulo d-flex align-items-center">
      <div class="col-md-12 col-lg-12 texto-titulo ">
        <h1>Vende tu Inmueble S.A</h1><br>
        <div class="separador"></div>
        <br>
        <p>"Descubre el camino hacia tus sueños inmobiliarios"</p>
        <br>
        <img src="img/icono-casa.png">
      </div> 
  </div>

  <div class="row formulario mt-5">
    <div>
      <h3>Búsqueda</h3>
      <p>Puedes realizar una búsqueda según tus intereses:</p>
    </div>
    <div class="row opciones">
      <div class="col-md-6 col-lg-6">
        <label for="tipo"><strong>Tipo de inmueble</strong></label>
        <select class="form-select" aria-label="Tipo de propiedad">
          <option selected>Seleccionar</option>
          <option value="casa">Casa</option>
          <option value="apartamento">Apartamento</option>
          <option value="terreno">Terreno</option>
        </select>
      </div>
      <div class="col-md-6 col-lg-6">
        <label for="rango"><strong>Rango de precio</strong></label>
        <select class="form-select col-md-6 col-lg-6" aria-label="Rango de precios">
          <option selected>Seleccionar</option>
          <option value="50-100">¢50 000 000 a ¢100 000 000</option>
          <option value="100-150">¢100 000 000 a ¢150 000 000</option>
          <option value="150+">¢150 000 000 y más</option>
        </select>
      </div>
      <div class="col-md-6 col-lg-6">
        <label for="provincia"><strong>Provincia</strong></label>
        <select class="form-select col-md-6 col-lg-6" aria-label="Provincia">
          <option selected>Seleccionar</option>
          <option value="san jose">San José</option>
          <option value="cartago">Cartago</option>
          <option value="alajuela">Alajuela</option>
          <option value="heredia">Heredia</option>
          <option value="guanacaste">Guanacaste</option>
          <option value="puntarenas">Puntarenas</option>
          <option value="limon">Limón</option>
        </select>
      </div>
      <div class="col-md-6 col-lg-6">
        <label for="habitaciones"><strong>Cantidad de habitaciones</strong></label>
        <select class="form-select col-md-6 col-lg-6" aria-label="Tipo de propiedad">
          <option selected>Seleccionar</option>
          <option value="1">1</option>
          <option value="2">2-3</option>
          <option value="3">4 o más</option>
        </select>
      </div>
      <div class="mt-2">
        <button class="btn btn-azul">Buscar</button>
      </div>
    </div>
  </div>

  <div class="row propiedades container justify-content-center mt-5">
    <h3>Nuestras Propiedades</h3>
    <div class="card col-md-4 col-lg-3 col-sm-12" style="width: 18rem;">
      <img class="mt-0" src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nombre Propiedad</h5>
        <p class="card-text">Aquí va el texto de la dirección exacta de la propiedad.</p>
        <a href="#" class="btn btn-azul">Ver detalles</a>
      </div>
    </div>
    <div class="card col-md-4 col-lg-3 col-sm-12" style="width: 18rem;">
      <img class="mt-0" src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nombre Propiedad</h5>
        <p class="card-text">Aquí va el texto de la dirección exacta de la propiedad.</p>
        <a href="#" class="btn btn-azul">Ver detalles</a>
      </div>
    </div>
    <div class="card col-md-4 col-lg-3 col-sm-12" style="width: 18rem;">
      <img class="mt-0" src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nombre Propiedad</h5>
        <p class="card-text">Aquí va el texto de la dirección exacta de la propiedad.</p>
        <a href="#" class="btn btn-azul">Ver detalles</a>
      </div>
    </div>
    <div class="card col-md-4 col-lg-3 col-sm-12" style="width: 18rem;">
      <img class="mt-0" src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nombre Propiedad</h5>
        <p class="card-text">Aquí va el texto de la dirección exacta de la propiedad.</p>
        <a href="#" class="btn btn-azul">Ver detalles</a>
      </div>
    </div>
    <div class="card col-md-4 col-lg-3 col-sm-12" style="width: 18rem;">
      <img class="mt-0" src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nombre Propiedad</h5>
        <p class="card-text">Aquí va el texto de la dirección exacta de la propiedad.</p>
        <a href="#" class="btn btn-azul">Ver detalles</a>
      </div>
    </div>
    <div class="card col-md-4 col-lg-3 col-sm-12" style="width: 18rem;">
      <img class="mt-0" src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nombre Propiedad</h5>
        <p class="card-text">Aquí va el texto de la dirección exacta de la propiedad.</p>
        <a href="#" class="btn btn-azul">Ver detalles</a>
      </div>
    </div>
    <div class="card col-md-4 col-lg-3 col-sm-12" style="width: 18rem;">
      <img class="mt-0" src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nombre Propiedad</h5>
        <p class="card-text">Aquí va el texto de la dirección exacta de la propiedad.</p>
        <a href="#" class="btn btn-azul">Ver detalles</a>
      </div>
    </div>
    <div class="card col-md-4 col-lg-3 col-sm-12" style="width: 18rem;">
      <img class="mt-0" src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nombre Propiedad</h5>
        <p class="card-text">Aquí va el texto de la dirección exacta de la propiedad.</p>
        <a href="#" class="btn btn-azul">Ver detalles</a>
      </div>
    </div>
    <div class="card col-md-4 col-lg-3 col-sm-12" style="width: 18rem;">
      <img class="mt-0" src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nombre Propiedad</h5>
        <p class="card-text">Aquí va el texto de la dirección exacta de la propiedad.</p>
        <a href="#" class="btn btn-azul">Ver detalles</a>
      </div>
    </div>
    <div class="card col-md-4 col-lg-3 col-sm-12" style="width: 18rem;">
      <img class="mt-0" src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nombre Propiedad</h5>
        <p class="card-text">Aquí va el texto de la dirección exacta de la propiedad.</p>
        <a href="#" class="btn btn-azul">Ver detalles</a>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <h3>Puede que te interese...</h3> <br>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.tecnimuebles.com/wp-content/uploads/2022/12/PROPLAC-Tips-para-Lograr-una-Fachada-Elegante-en-Casa-1024x683-1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 id="etiqueta1">Nombre del inmueble</h5>
            <a href="">Ver detalles</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://hips.hearstapps.com/hmg-prod/images/casa-elegante-en-memphis-1610965354.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 id="etiqueta2">Nombre del inmueble</h5>
            <a href="">Ver detalles</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 id="etiqueta3">Nombre del inmueble</h5>
            <a href="">Ver detalles</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="container mt-5">
    <h3>¿Por qué elegirnos?</h3> <br>
    <div class="row d-flex align-items-center mt-0 pt-0">
      <div class="col-sm-12 col-md-6 col-lg-6">
        <p>En "Vende tu Inmueble", entendemos que cada propiedad tiene su historia única.
          Nuestra plataforma se centra en ofrecer una experiencia personalizada, adaptada a
          tus necesidades y aspiraciones. Nos apasiona conectar personas con hogares que no
          solo cumplen con sus requisitos, sino que también encienden su imaginación. <br>
          Nuestro equipo de expertos en bienes raíces está comprometido a brindarte
          asesoramiento y apoyo en cada paso del camino. Ya sea que estés vendiendo tu
          propiedad o buscando un nuevo hogar, estamos aquí para convertir tus sueños en
          realidad.
        </p>
      </div>

      <div class="img-info col-sm-12 col-md-6 col-lg-6">
        <img class="d-block" src="img/hogares.png" alt="Logo de la empresa">
      </div>
    </div>
  </div>

  <div class="row container justify-content-center mt-5">
    <h3>Testimonios de nuestros clientes</h3>
    <div class="comentario d-flex align-items-center">
      <img src="img/iconoUsuario.png" alt="Imagen de usuario">
      <p><em>Vender mi casa nunca fue tan fácil como con 'Vende tu Inmueble'.
          Desde el primer día, su equipo me brindó un apoyo excepcional. La plataforma
          intuitiva hizo que la publicación de mi propiedad fuera sencilla, y
          el alcance global atrajo a compradores potenciales de todo el mundo. ¡Gracias
          por hacer que el proceso sea tan transparente y exitoso!</em></p>
    </div>
    <div class="comentario d-flex align-items-center">
      <img src="img/iconoUsuario.png" alt="Imagen de usuario">
      <p><em>Después de buscar mi nuevo hogar en diferentes plataformas, 'Vende tu Inmueble'
          destacó por su interfaz amigable y sus opciones variadas. El equipo de asesores
          respondió rápidamente a mis consultas y me guiaron durante todo el proceso. Ahora,
          gracias a ellos, estoy disfrutando de la casa de mis sueños.
          ¡Totalmente recomendado!</em></p>
    </div>
    <div class="comentario d-flex align-items-center">
      <img src="img/iconoUsuario.png" alt="Imagen de usuario">
      <p><em>Invertir en propiedades con 'Vende tu Inmueble' fue la mejor decisión que tomé.
          Su red global de oportunidades me permitió encontrar proyectos prometedores y
          rentables. El equipo de expertos me proporcionó información detallada y
          asesoramiento, brindándome la confianza necesaria para tomar decisiones acertadas.
          ¡Gracias por hacer que mi cartera de inversiones crezca con éxito!</em></p>
    </div>

  </div>
  <button class="btn btn-azul"> <a href="inmuebles.php">Todas las propiedades</a></button>
</main>
<?php include "shared/footer.php" ?>