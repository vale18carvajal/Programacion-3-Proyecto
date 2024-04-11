<?php
include "shared/header.php";

?>

<main>
    <h1 class="text-center">Detalle de la Propiedad</h1>
    <div class="fotos">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/casa1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/casa2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/casa3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="row info">
        <h3 class="mb-3">Información de la Propiedad</h3>
        <div class=" contenedor col-md-12 col-lg-8">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nombre" aria-expanded="true" aria-controls="collapseOne">
                        <i class="fa-solid fa-house"></i> Nombre de la Propiedad
                        </button>
                    </h2>
                    <div id="nombre" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div id="nombre_inmueble" class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#direccion" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fa-solid fa-location-dot"></i> Dirección
                        </button>
                    </h2>
                    <div id="direccion" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div id="direccion_exacta" class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#precio_inmueble" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fa-solid fa-money-bill-transfer"></i> Precio
                        </button>
                    </h2>
                    <div id="precio_inmueble" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div id="precio" class="accordion-body">
                            <strong>USD $ </strong> 100000
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#espacios" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fa-solid fa-door-open"></i>Habitaciones y Espacios
                        </button>
                    </h2>
                    <div id="espacios" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div id="cant_habitaciones" class="accordion-body">
                            <strong>Número de habitaciones: </strong> n
                        </div>
                        <div id="cant_banios" class="accordion-body">
                            <strong>Cantidad de baños: </strong> n
                        </div>
                        <div id="cant_vehiculos" class="accordion-body">
                            <strong>Espacio para vehículos: </strong> n
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contacto" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fa-solid fa-address-book"></i> Contacto del Vendedor
                        </button>
                    </h2>
                    <div id="contacto" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div id="nombre_vendedor" class="accordion-body">
                            <strong>Nombre del vendedor:</strong> Luis Aguilar Sequeira
                        </div>
                        <div id="nombre_vendedor" class="accordion-body">
                            <strong>Correo:</strong> ejemplo@gmail.com
                        </div>
                        <div id="nombre_vendedor" class="accordion-body">
                            <strong>Teléfono: </strong> 88888888
                        </div>
                        <div id="nombre_vendedor" class="accordion-body">
                            <strong>Whatsapp: </strong> Link
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="contenedor col-md-12 col-lg-4 d-flex align-align-items-center">
            <div class="qr">

            </div>
        </div>
    </div>


</main>



























<?php
include "shared/footer.php";

?>