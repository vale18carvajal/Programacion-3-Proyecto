<?php
include "shared/header.php";
?>

<main>
    <h1 class="text-center">Detalle de la Propiedad</h1>
    <div class="fotos">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="foto1" src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img id="foto2" src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img id="foto3" src="" class="d-block w-100" alt="...">
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
        <div class="mb-5 contenedor col-md-12 col-lg-8">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nombre" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa-solid fa-house"></i> Nombre de la Propiedad
                        </button>
                    </h2>
                    <div id="nombre" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div id="nombre_inmueble" class="accordion-body">
                            <!-- texto dinaminco -->
                            <strong><span></span></strong>
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
                            <!-- texto dinaminco -->
                            <span></span>
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
                            <!-- texto dinaminco -->
                            <strong>USD $ </strong> <span></span>
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
                            <!-- texto dinaminco -->
                            <strong>Número de habitaciones: </strong> <span></span>
                        </div>
                        <div id="cant_banios" class="accordion-body">
                            <strong>Cantidad de baños: </strong> <span></span>
                        </div>
                        <div id="cant_vehiculos" class="accordion-body">
                            <strong>Espacio para vehículos: </strong> <span></span>
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
                        <div id="nombre_completo" class="accordion-body">
                            <strong>Nombre del vendedor:</strong> <span></span>
                        </div>
                        <div id="correo" class="accordion-body">
                            <strong>Correo:</strong> <span></span>
                        </div>
                        <div id="telefono" class="accordion-body">
                            <strong>Teléfono: </strong> <span></span>
                        </div>
                        <div id="" class="accordion-body">
                        <a id="whatsapp" target="_blank" href=""><strong>Link de Whatsapp</strong></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="contenedorQR col-md-12 col-lg-4 ">
            <div id="qr" class="qr">

            </div>
            <h5 class="mt-4 text-center">Puedes escanear el código QR</h5>
        </div>
    </div>


</main>



























<?php
include "shared/footer.php";

?>