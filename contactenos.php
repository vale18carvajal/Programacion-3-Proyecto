<?php include "shared/header.php" ?>

    <main class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre">
                <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email">
                <label for="email">Email</label>
            </div>
            <div class="mb-3">
                <label for="asunto">Asunto</label>
                <select id="asunto" name="asunto" class="form-select">
                    <option value="1">Preguntas</option>
                    <option value="2">Formas de pago</option>
                    <option value="3">Descuento</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
        <div class=" mb-3">
                <label for="mensaje">Descripción</label>
                <textarea class="form-control" id="mensaje" name="mensaje" cols="30" rows="10"></textarea>
            </div>
            <div class=" mb-3">
                <button class="btn btn-azul">Guardar</button>
            </div>
        </div>
        
    </main>
    


    <?php include "shared/footer.php" ?>