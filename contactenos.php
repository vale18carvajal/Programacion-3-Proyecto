<?php include "shared/header.php" ?>

<main class="row d-flex justify-content-center">
    <div class="info-contacto col-md-12 col-lg-4">
        <h1>CONTACTO</h1>
        <p>
            En Vende tu Inmueble S.A. nos comprometemos a proporcionar el más alto nivel de atención a nuestros clientes.
        </p>
        <p> Si desea comunicarse con nosotros, por favor, <strong>complete el siguiente formulario</strong> y nos pondremos en
            contacto con usted lo antes posible. Será un placer atenderle.</p>
        <p>
        <i class="fa-solid fa-clock"></i> Nuestro horario de atención es de lunes a sábado de 8:00 a.m. a 8:00 p.m. y domingos de 11:00 a.m. a 8:30 p.m.
        </p>

        <p>
        <i class="fa-solid fa-phone"></i> Central telefónica: +506 2233-4455
        </p>
        <p>
        <i class="fa-solid fa-envelope"></i> Correo electrónico: vende_tu_inmueble@vtm.com
        </p>
    </div>
    <div class="c-formulario col-md-12 col-lg-8">
    <form class="row formulario">
        <div class="col-md-6 col-lg-6 mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="col-md-6 col-lg-6 mb-3">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos">
        </div>
        <div class="col-md-6 col-lg-6 mb-3">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6 col-lg-6 mb-3">
            <label for="asunto">Asunto</label>
            <select id="asunto" name="asunto" class="form-select">
                <option>Seleccione asunto</option>
                <option value="1">Deseo vender propiedad</option>
                <option value="2">Deseo adquirir una nueva propiedad</option>
                <option value="3">Problemas con la plataforma</option>
                <option value="4">No me puedo comunicar con el vendedor</option>
                <option value="5">Otro</option>
            </select>
        </div>
        <div class="col-md-6 col-lg-6 otroAsunto" hidden>
            <label for="otro">Ingrese asunto</label>
            <input type="text" class="form-control" id="otro" name="otro">
        </div>
        <div class="col-md-12 col-lg-12 mb-3">
            <label for="mensaje">Descripción</label>
            <textarea class="form-control" id="mensaje" name="mensaje" cols="30" rows="10" placeholder="Description"></textarea>
        </div>
        <div class="mb-3">
            <button class="btn btn-azul enviar" type="button">Enviar</button>
        </div>
    </form>
    </div>

</main>



<?php include "shared/footer.php" ?>