<?php include "shared/header.php" ?>

<main>
    <div class="row titulo-centrado d-flex align-items-center">
        <h1 class="col-md-12 col-lg-12 texto-img">Nuestras Propiedades</h1>
    </div>

    <div class="row formulario1 position-relative">
        <div class="text-center">
            <h3>Búsqueda</h3>
        </div>
        <div class="card1">
            <form>
                <div class="col-md-6 col-lg-6">
                    <label for="tipo"><strong>Tipo de inmueble</strong></label>
                    <select class="form-select" aria-label="Tipo de propiedad" id="tipo" name="tipoInmueble">
                        <option value="0" selected>Seleccionar</option>
                        <option value="1">Casa</option>
                        <option value="2">Apartamento</option>
                        <option value="3">Terreno</option>
                    </select>

                </div>
                <div class="col-md-6 col-lg-6">
                    <label for="rango"><strong>Rango de precio</strong></label>
                    <select class="form-select col-md-6 col-lg-6" aria-label="Rango de precios" id="rango" name="precio"
                        name="filtroRango">
                        <option value="0" selected>Seleccionar</option>
                        <option value="1">$70 000 a $195 000</option>
                        <option value="2">$195 000 a $395 000</option>
                        <option value="3">$395 000 y más</option>
                    </select>
                </div>
                <div class="col-md-6 col-lg-6">
                    <label for="provincia"><strong>Ubicacion</strong></label>
                    <select class="form-select col-md-6 col-lg-6" aria-label="Ubicacion" id="provincia" name="ubicacion"
                        name="filtroProvincia">
                        <option value="0" selected>Seleccionar</option>
                        <option value="1">San José</option>
                        <option value="2">Cartago</option>
                        <option value="3">Alajuela</option>
                        <option value="4">Heredia</option>
                        <option value="5">Guanacaste</option>
                        <option value="6">Puntarenas</option>
                        <option value="7">Limón</option>
                    </select>
                </div>
                <div class="position-absolute top-50 end-0 translate-middle-y mb-3 me-3">
                    <button id="filtrar" class="btn btn-azul btnfiltro">Filtrar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="text-center mt-5">
        <!-- Aquí es donde se muestran las propiedades -->
        <h3 class="mb-5">Propiedades</h3>
        <div class="row formulariop mt-5 d-flex justify-content-center">
            
        </div>

    </div>


</main>

<?php include "shared/footer.php" ?>