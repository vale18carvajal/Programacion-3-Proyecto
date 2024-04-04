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
                <div class="col-md-6 col-lg-6">
                    <label for="tipo"><strong>Tipo de inmueble</strong></label>
                    <select class="form-select" aria-label="Tipo de propiedad"id="tipo">
                        <option selected>Seleccionar</option>
                        <option value="casa">Casa</option>
                        <option value="apartamento">Apartamento</option>
                        <option value="terreno">Terreno</option>
                    </select>
                </div>
                <div class="col-md-6 col-lg-6">
                    <label for="rango"><strong>Rango de precio</strong></label>
                    <select class="form-select col-md-6 col-lg-6" aria-label="Rango de precios" id="rango">
                        <option selected>Seleccionar</option>
                        <option value="50-100">¢50 000 000 a ¢100 000 000</option>
                        <option value="100-150">¢100 000 000 a ¢150 000 000</option>
                        <option value="150+">¢150 000 000 y más</option>
                    </select>
                </div>
                <div class="col-md-6 col-lg-6">
                    <label for="provincia"><strong>Ubicacion</strong></label>
                    <select class="form-select col-md-6 col-lg-6" aria-label="Ubicacion"id="provincia">
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
                <div class="position-absolute top-50 end-0 translate-middle-y mb-3 me-3">
                    <button class="btn btnfiltro">Filtrar</button>
                </div>
            </div>
        </div>

    <div class="text-center">
        <!-- Aquí es donde se muestran las propiedades -->
        <di class="row formulariop mt-5">
            
        <h3>Propiedades</h3>
    
    <?php
    $properties = [
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 1',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 2',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 3',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 4',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 5',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 6',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 7',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 8',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 9',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 10',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 11',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 12',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 13',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 14',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 15',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 16',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 17',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 18',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 19',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
        [
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg',
            'title' => 'Propiedad 20',
            'description' => 'Aquí va el texto de la dirección exacta de la propiedad.',
        ],
    ];
    
            
            // Obtener el número de página actual
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

            // Calcular el índice de inicio y fin para el subconjunto de propiedades
            $startIndex = ($currentPage - 1) * 10;
            $endIndex = $startIndex + 10;

            // Obtener el subconjunto de propiedades para la página actual
            $propertiesPerPage = array_slice($properties, $startIndex, 10);
            foreach ($propertiesPerPage as $property): ?>
                    <div class="card1 col-6 border" style="width: 18rem;">
                        <img class="mt-0" src="<?php echo $property['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $property['title']; ?></h5>
                            <p class="card-text"><?php echo $property['description']; ?></p>
                            <a href="#" class="btn btn-azul" data-toggle="modal" data-target="#propertyModal<?php echo $index; ?>">Ver detalles</a>   
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="col-md-12 paginas">    
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <a class="btn btn-azul" href="inmueble.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php endfor; ?>    
                </div>
            
            
            
    
        
    </div>
    
        
    </main>

    <?php include "shared/footer.php" ?>