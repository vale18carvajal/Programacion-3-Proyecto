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
        <fieldset id="info-propiedad">
            <div class="justify-content-center mt-3">
                <label for="idPropiedad">ID</label>
                <input name="idPropiedad" id="idPropiedad" class="form-control" type="text">
            </div>

            <div>
                <label for="nombreInmueble" class="form-label">Nombre del Inmueble</label>
                <input name="nombreInmueble" id="nombreInmueble" class="form-control" type="text">
            </div>
            <div>
                <label for="tipoInmueble" class="form-label">Tipo de Inmueble</label>
                <select name="tipoInmueble" id="tipoInmueble" class="form-select" aria-label="Selección de tipo de inmueble">
                    <option value="1">Casa</option>
                    <option value="2">Apartamento</option>
                    <option value="3">Terreno</option>
                </select>
            </div>
            <div>
                <label for="provincia" class="form-label">Provincia</label>
                <select name="provincia" id="provincia" class="form-select" aria-label="Selección de provincia">
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
            <div class="d-flex align-items-top">
                <label for="detalles" class="form-label">Dirección</label>
                <textarea class="form-control" placeholder="Detalles de dirección" id="detalles" name="detalles" style="height: 60px"></textarea>
            </div>
            <div>
                <label for="estado" class="form-label">Estado</label>
                <select name="estado" id="estado" class="form-select" aria-label="Selección de tipo de usuario">
                    <option value="1">Disponible</option>
                    <option value="2">No disponible</option>
                </select>
            </div>
            <div>
                <label for="precio" class="form-label">Precio $</label>
                <input name="precio" id="precio" class="form-control" type="number">
            </div>
            <div>
                <label for="habitaciones" class="form-label">Cantidad de Habitaciones</label>
                <input name="habitaciones" id="habitaciones" class="form-control" type="number">
            </div>
            <div>
                <label for="banios" class="form-label">Cantidad de Baños</label>
                <input name="banios" id="banios" class="form-control" type="number">
            </div>
            <div>
                <label for="vehiculos" class="form-label">Espacio para Vehículos</label>
                <input name="vehiculos" id="vehiculos" class="form-control" type="number">
            </div>
        </fieldset>
        <fieldset id="info-vendedor">
            <div>
                <label for="idVendedor" class="form-label">ID del vendedor</label>
                <input id="idVendedor" class="form-control" type="number">
                <a name="cambiar-vendedor" id="cambiar-vendedor" data-bs-toggle="modal" data-bs-target="#modal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cambiar vendedor"><img src="img/icono-cambiar.png" alt="Cambiar Vendedor"></a>
            </div>
            <div>
                <label for="nombreVendedor" class="form-label">Nombre del vendedor</label>
                <input name="nombreVendedor" id="nombreVendedor" class="form-control" type="number" disabled>
            </div>
            <div>
                <label for="correoVendedor" class="form-label">Correo del vendedor</label>
                <input name="correoVendedor" id="correoVendedor" class="form-control" type="email" disabled>
            </div>
            <div>
                <label for="telefonoVendedor" class="form-label">Teléfono del vendedor</label>
                <input name="telefonoVendedor" id="telefonoVendedor" class="form-control" type="number" disabled>
            </div>
        </fieldset>
        <fieldset id="imagenes">
            <div>
                <label for="foto1" class="form-label">Foto de la propiedad 1</label>
                <input name="foto1" id="foto1" class="form-control" type="file">
            </div>
            <div>
                <label for="foto2" class="form-label">Foto de la propiedad 2</label>
                <input name="foto2" id="foto2" class="form-control" type="file">
            </div>
            <div>
                <label for="foto3" class="form-label">Foto de la propiedad 3</label>
                <input name="foto3" id="foto3" class="form-control" type="file">
            </div>
            <!-- El sisguiente input tiene que ser dinamico ya que es opcional -->
            <div>
                <label class="form-label">Foto de la propiedad n</label>
                <input class="form-control" type="file">
                <button type="button" class="btn-close" aria-label="borrar" disabled></button>
            </div>
        </fieldset>

        <div class="opciones">
            <button type="button" id="editar" class="btn btn-azul">Editar Datos</button>
            <button type="submit" id="guardar" class="btn btn-success">Guardar Cambios</button>
            <button type="button" id="cancelar" class="btn btn-danger">Cancelar</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="Modal de políticas de Privacidad" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seleccionar Vendedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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