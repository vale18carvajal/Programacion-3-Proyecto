<?php include "shared/header.php" ?>

<main class="justify-content-center container">
    <div class="row">
        <div class="col-md-6 col-lg-6 mb-3">
            <label for="Nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Name">
        </div>
        <div class="col-md-6 col-lg-6 mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            
        </div>
            <div class="col-md-6 col-lg-6 mb-3">
                <label for="asunto">Asunto</label>
                <select id="asunto" name="asunto" class="form-select">
                    <option value="1">Preguntas</option>
                    <option value="2">Formas de pago</option>
                    <option value="3">Descuento</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 mb-3">
                <label for="mensaje">Descripción</label>
                <textarea class="form-control" id="mensaje" name="mensaje" cols="30" rows="10" placeholder="Description"></textarea>
            </div>
            <div class=" mb-3">
                <button class="btn btn-azul">Guardar</button>
            </div>
        </div>
</main>



<?php include "shared/footer.php" ?>