<?php include "shared/header.php" ?>

<?php

function keepFilterValue($param_name, $value){
    $isSelected = isset($_GET[$param_name]) && $_GET[$param_name] === $value ? "selected" : "";
    return $isSelected;
}

?>

<main>

    <div class="row titulo-centrado d-flex align-items-center">
        <h1 class="col-md-12 col-lg-12 texto-img">Nuestras Propiedades</h1>
    </div>

    <div class="row formulario1 position-relative">
        <div class="text-center">
            <h3>Búsqueda</h3>
        </div>
        <div class="card1">
            <form method="get">
                <div class="col-md-6 col-lg-6">
                    <label for="tipo"><strong>Tipo de inmueble</strong></label>
                    <select class="form-select" aria-label="Tipo de propiedad" id="tipo" name="tipoInmueble">
                        <option value="" <?php echo keepFilterValue('tipoInmueble', '') ?> >Seleccionar</option>
                        <option value="casa" <?php echo keepFilterValue('tipoInmueble', 'casa') ?>>Casa</option>
                        <option value="apartamento" <?php echo keepFilterValue('tipoInmueble', 'apartamento') ?>>Apartamento</option>
                        <option value="terreno" <?php echo keepFilterValue('tipoInmueble', 'terreno') ?>>Terreno</option>
                    </select>

                </div>
                <div class="col-md-6 col-lg-6">
                    <label for="rango"><strong>Rango de precio</strong></label>
                    <select class="form-select col-md-6 col-lg-6" aria-label="Rango de precios" id="rango" name="precio"
                        name="filtroRango">
                        <option value="" <?php echo keepFilterValue('precio', '') ?>>Seleccionar</option>
                        <option value="70-195" <?php echo keepFilterValue('precio',"70-195")?>>$70 000 a $195 000</option>
                        <option value="195-395" <?php echo keepFilterValue('precio',"195-395")?>>$195 000 a $395 000</option>
                        <option value="395+" <?php echo keepFilterValue('precio',"395+")?>>$395 000 y más</option>
                    </select>
                </div>
                <div class="col-md-6 col-lg-6">
                    <label for="provincia"><strong>Ubicacion</strong></label>
                    <select class="form-select col-md-6 col-lg-6" aria-label="Ubicacion" id="provincia" name="ubicacion"
                        name="filtroProvincia">
                        <option value="" <?php echo keepFilterValue('ubicacion', '')?>>Seleccionar</option>
                        <option value="san jose" <?php echo keepFilterValue('ubicacion','san jose')?>>San José</option>
                        <option value="cartago" <?php echo keepFilterValue('ubicacion','cartago')?>>Cartago</option>
                        <option value="alajuela" <?php echo keepFilterValue('ubicacion','alajuela')?>>Alajuela</option>
                        <option value="heredia" <?php echo keepFilterValue('ubicacion','heredia')?>>Heredia</option>
                        <option value="guanacaste" <?php echo keepFilterValue('ubicacion','guanacaste')?>>Guanacaste</option>
                        <option value="puntarenas" <?php echo keepFilterValue('ubicacion','puntarenas')?>>Puntarenas</option>
                        <option value="limon" <?php echo keepFilterValue('ubicacion','limon')?>>Limón</option>
                    </select>
                </div>
                <div class="position-absolute top-50 end-0 translate-middle-y mb-3 me-3">
                    <button class="btn btnfiltro">Filtrar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="text-center">
        <!-- Aquí es donde se muestran las propiedades -->
        <div class="row formulariop mt-5 d-flex justify-content-center">
            <h3 class="mb-5">Propiedades</h3>

            <?php

            // Obtener filtros seleccionados, si no hay filtros, default a null
            $propertyTypeFilter = isset($_GET['tipoInmueble']) ? $_GET['tipoInmueble'] : "";
            $locationFilter = isset($_GET['ubicacion']) ? $_GET['ubicacion'] : "";
            $priceRangeFilter = isset($_GET['precio']) ? $_GET['precio'] : "";

            $endpoint = 'http://localhost:8080/inmuebledis';

            $endpointParams = [
                'tipoInmueble' => $propertyTypeFilter,
                'ubicacion' => $locationFilter,
                'precio' => $priceRangeFilter
            ];

            $URL_ = $endpoint . '?' . http_build_query($endpointParams);
            $ch = curl_init($URL_);

            curl_setopt($ch, CURLOPT_HTTPGET, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response_json = curl_exec($ch);
            curl_close($ch);
            $properties = json_decode($response_json, true);

            // Obtener el número de página actual
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
            $itemsPerPage = 10;

            // Calcular el numero de botones para las paginas
            $propertiesCount = count($properties);
            $numPages = ceil($propertiesCount / $itemsPerPage);

            // Asegurarse de que currentPage no sea mayor al total de paginas
            if ($currentPage > $numPages) {
                $currentPage = $numPages;
            }

            // Calcular el índice de inicio y fin para el subconjunto de propiedades
            $startIndex = ($currentPage - 1) * $itemsPerPage;
            $endIndex = $startIndex + $itemsPerPage;

            // Obtener el subconjunto de propiedades para la página actual
            $propertiesPerPage = array_slice($properties, $startIndex, $endIndex);

            foreach ($propertiesPerPage as $property): ?>
                <div id="<?php echo $property['id']; ?>" class="card col-6 border" style="width: 18rem;">
                    <img class="mt-0" src="img/fotos-propiedades/<?php echo $property['id']; ?>-img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $property['nombre_inmueble']; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $property['direccion_exacta']; ?>
                        </p>
                        <button class="btn btn-azul detalles">Ver detalles</button>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="col-md-12 paginas">
                <?php for ($i = 1; $i <= $numPages; $i++): ?>
                    <a class="btn btn-azul" href="inmuebles.php?page=<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </a>
                <?php endfor; ?>
            </div>



        </div>

    </div>


</main>

<?php include "shared/footer.php" ?>