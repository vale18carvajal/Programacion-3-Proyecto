<?php include "shared/header.php" ?>
<main>
    <a href="CRUD-propiedades.php"><button id="regresar" class="btn btn-azul"><i class="fa-solid fa-arrow-left"></i> Regresar</button></a>
    <h1>Detalles de la Propiedad</h1>

    <div id="vistaPrevia">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/casa1.png" class="d-block w-100" alt="Foto de la propiedad">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Vista previa</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/casa2.png" class="d-block w-100" alt="Foto de la propiedad">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Vista previa</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/casa3.png" class="d-block w-100" alt="Foto de la propiedad">
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
    <div class="datos-propiedad justify-content-center">
        <fieldset class="row" id="info-propiedad">
            <legend>Información general del la propiedad<div class="separador"></div>
            </legend>
            <div class=" col-lg-6 col-md-6">
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
                    <option value="1">Casa</option>
                    <option value="2">Apartamento</option>
                    <option value="3">Terreno</option>
                </select>
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="provincia_fkdireccion_exacta" class="form-label">Provincia</label>
                <select name="provincia_fkdireccion_exacta" id="provincia_fkdireccion_exacta" class="form-select" aria-label="Selección de provincia">
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
                <input name="precio" id="precio" class="form-control" type="number">
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
                <input name="nombre_completo" id="nombre_completo" class="form-control" type="number" disabled>
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="correo" class="form-label">Correo del vendedor</label>
                <input name="correo" id="correo" class="form-control" type="email" disabled>
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="telefono" class="form-label">Teléfono del vendedor</label>
                <input name="telefono" id="telefono" class="form-control" type="number" disabled>
            </div>
        </fieldset>
        <fieldset class="row" id="imagenes">
            <legend>Imágenes de la propiedad <div class="separador"></div>
            </legend>
            <div class="col-lg-6 col-md-6">
                <label for="foto1" class="form-label">Foto de la propiedad 1</label>
                <input name="foto1" id="foto1" class="form-control" type="file">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="foto2" class="form-label">Foto de la propiedad 2</label>
                <input name="foto2" id="foto2" class="form-control" type="file">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="foto3" class="form-label">Foto de la propiedad 3</label>
                <input name="foto3" id="foto3" class="form-control" type="file">
            </div>
            <!-- El sisguiente input tiene que ser dinamico ya que es opcional -->
            <div class="col-lg-6 col-md-6">
                <label class="form-label">Foto de la propiedad n</label>
                <div>
                    <input class="form-control f-adicional" type="file">
                    <button type="button" class="btn-close eliminar" aria-label="borrar"></button>
                </div>
            </div>
        </fieldset>

        <div class="opciones col-lg-12 col-md-12">
            <button type="button" id="editar" class="btn btn-azul">Editar Datos</button>
            <button type="submit" id="guardar" class="btn btn-success">Guardar Cambios</button>
            <button type="button" id="cancelar" class="btn btn-danger">Cancelar</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="Modal vendedores" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seleccionar Vendedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <div class="row">
                        <div class="col-12 col-6">
                            <h3 class="text-center">Nuevo Vendedor</h3>
                            <label for="cedula" class="form-label">Cédula</label>
                            <input name="cedula" id="cedula" class="form-control" type="number">
                        </div>
                        <div class="col-12 col-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input name="nombre" id="nombre" class="form-control" type="text">
                        </div>
                        <div class="col-12 col-6">
                            <label for="apellido1" class="form-label">1° Apellido</label>
                            <input name="apellido1" id="apellido1" class="form-control" type="text">
                        </div>
                        <div class="col-12 col-6">
                            <label for="apellido2" class="form-label">2° Apellido</label>
                            <input name="apellido2" id="apellido2" class="form-control" type="text">
                        </div>
                        <div class="col-12 col-6">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input name="correo" id="apellido2" class="form-control" type="email">
                        </div>
                        <div class="col-12 col-6">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input name="telefono" id="telefono" class="form-control" type="number">
                        </div>
                        <div class="mb-4 d-block justify-content-center">
                        <button type="submit" id="guardarVendedor" class="btn btn-success">Guardar Cambios</button>
                        <button type="button" id="cancelarOpc" class="btn btn-danger">Cancelar</button>
                        </div>
                    </div> -->
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