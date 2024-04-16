<?php include "shared/header.php" ?>
<main>
    <button id="regresar" class="btn btn-azul"><i class="fa-solid fa-arrow-left"></i> Regresar</button>
    <h1>Detalles de la Propiedad</h1>

    <div id="vistaPrevia">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="foto1" src="img/Vista_Previa.png" class="d-block w-100" alt="Foto de la propiedad">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Vista previa</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="foto2" src="img/Vista_Previa.png" class="d-block w-100" alt="Foto de la propiedad">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Vista previa</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="foto3" src="img/Vista_Previa.png" class="d-block w-100" alt="Foto de la propiedad">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Vista previa</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <a href="#imagenes"><button type="button" id="agregar-img" class="btn btn-azul">Añadir imagen</button></a>
    </div>
    <form class="datos-propiedad justify-content-center">
        <fieldset class="row" id="info-propiedad">
            <legend>Información general del la propiedad<div class="separador"></div>
            </legend>
            <div id="inmuebleId" class="col-lg-6 col-md-6">
                <label for="id" class="form-label">ID</label>
                <input name="id" id="id" class="form-control" type="text">
            </div>

            <div class="col-lg-6 col-md-6">
                <label for="nombre_inmueble" class="form-label">Nombre del Inmueble</label>
                <input name="nombre_inmueble" id="nombre_inmueble" class="form-control" type="text">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="tipo_inmueble_fk" class="form-label">Tipo de Inmueble</label>
                <select name="tipo_inmueble_fk" id="tipo_inmueble_fk" class="form-select" aria-label="Selección de tipo de inmueble">
                    <option selected>Seleccionar</option>
                    <option value="1">Casa</option>
                    <option value="2">Apartamento</option>
                    <option value="3">Terreno</option>
                </select>
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="provincia_fk" class="form-label">Provincia</label>
                <select name="provincia_fk" id="provincia_fk" class="form-select" aria-label="Selección de provincia">
                    <option selected>Seleccionar</option>
                    <option value="1">San José</option>
                    <option value="2">Cartago</option>
                    <option value="3">Alajuela</option>
                    <option value="4">Heredia</option>
                    <option value="5">Guanacaste</option>
                    <option value="6">Puntarenas</option>
                    <option value="7">Limón</option>
                </select>
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="direccion_exacta" class="form-label">Dirección</label>
                <textarea name="direccion_exacta" id="direccion_exacta" class="form-control" placeholder="Detalles de dirección" style="height: 60px"></textarea>
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="estado_fk" class="form-label">Estado</label>
                <select name="estado_fk" id="estado_fk" class="form-select" aria-label="Selección de tipo de usuario">
                    <option value="1">Disponible</option>
                    <option value="2">No disponible</option>
                </select>
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="precio" class="form-label">Precio $</label>
                <input name="precio" id="precio" class="form-control">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="cant_habitaciones" class="form-label">Cantidad de Habitaciones</label>
                <input name="cant_habitaciones" id="cant_habitaciones" class="form-control" type="number">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="cant_banios" class="form-label">Cantidad de Baños</label>
                <input name="cant_banios" id="cant_banios" class="form-control" type="number">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="cant_vehiculos" class="form-label">Espacio para Vehículos</label>
                <input name="cant_vehiculos" id="cant_vehiculos" class="form-control" type="number">
            </div>
        </fieldset>
        <fieldset class="row" id="info-vendedor">
            <legend>Información del vendedor <div class="separador"></div>
            </legend>
            <div class="col-lg-6 col-md-6">
                <label for="codigo_vendedor" class="form-label">ID del vendedor</label>
                <div>
                    <input name="codigo_vendedor" id="codigo_vendedor" class="form-control" type="number">
                    <button id="cambiar-vendedor" data-bs-toggle="modal" data-bs-target="#modal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Seleccionar vendedor" class="btn btn-azul"><i class="fa-solid fa-address-book"></i></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="nombre_completo" class="form-label">Nombre del vendedor</label>
                <input name="nombre_completo" id="nombre_completo" class="form-control" type="text">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="correo" class="form-label">Correo del vendedor</label>
                <input name="correo" id="correo" class="form-control" type="email">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="telefono" class="form-label">Teléfono del vendedor</label>
                <input name="telefono" id="telefono" class="form-control" type="number">
            </div>
        </fieldset>
        <fieldset class="row" id="imagenes">
            <legend>Imágenes de la propiedad <div class="separador"></div>
            </legend>
            <div class="col-lg-6 col-md-6">
                <label for="imagen1" class="form-label">Foto de la propiedad 1</label>
                <input name="imagen1" id="imagen1" class="form-control" type="file">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="imagen2" class="form-label">Foto de la propiedad 2</label>
                <input name="imagen2" id="imagen2" class="form-control" type="file">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="imagen3" class="form-label">Foto de la propiedad 3</label>
                <input name="imagen3" id="imagen3" class="form-control" type="file">
            </div>
            <!-- El siguiente input tiene que ser dinamico ya que es opcional -->
            <!-- <div class="col-lg-6 col-md-6">
                <label class="form-label">Foto de la propiedad n</label>
                <div>
                    <input class="form-control f-adicional" type="file">
                    <button type="button" class="btn-close eliminar" aria-label="borrar"></button>
                </div>
            </div> -->
        </fieldset>

        <div class="opciones col-lg-12 col-md-12">
            <button type="button" id="editar" class="btn btn-azul">Editar Datos</button>
            <button type="submit" id="guardar" class="btn btn-success">Guardar Cambios</button>
            <button type="button" id="cancelar" class="btn btn-danger">Cancelar</button>
        </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="Modal vendedores" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seleccionar Vendedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Contenido dinamico -->
                    <button id="agregar-vendedor" class="btn btn-success"><i class="fa-solid fa-user-plus"></i> Añadir</button>
                    <!-- tabla para seleccionar vendedor -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">1° Apellido</th>
                                <th scope="col">2° Apellido</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contenido dinamico -->
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Listo</button>
                </div>
            </div>
        </div>
    </div>

</main>
<?php include "shared/footer.php" ?>