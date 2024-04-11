<?php include "shared/header.php" ?>

<main>
    <h2>Información del usuario</h2>
    <div class="regresar"><a href="CRUD-usuarios.php"><button id="regresar" class="btn btn-azul"><i class="fa-solid fa-arrow-left"></i> Regresar</button></a></div>
    <form class="row info-usuario mb-5">
        <div class="foto mt-3">
            <img id="foto" src="img/foto-predeterminada.webp" alt="Foto de perfil del usuario">
            <h4 id="nombreUsuario">Usuario</h4>
        </div>

        <div class="col-md-12 col-lg-6 mt-3">
            <label for="cedula" class="form-label">Cédula</label>
            <input name="cedula" id="cedula" class="form-control">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" id="nombre" class="form-control" type="text">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="apellido1" class="form-label">Primer Apellido</label>
            <input name="apellido1" id="apellido1" class="form-control" type="text">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="apellido2" class="form-label">Segundo Apellido</label>
            <input name="apellido2" id="apellido2" class="form-control" type="text">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" type="date">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input name="correo" id="correo" class="form-control" type="email">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="telefono" class="form-label">Número de Teléfono</label>
            <input name="telefono" id="telefono" class="form-control">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="nombre_usuario" class="form-label">Nombre de Usuario</label>
            <input name="nombre_usuario" id="nombre_usuario" class="form-control" type="text">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="foto_perfil" class="form-label">Foto de Usuario</label>
            <input name="foto_perfil" id="foto_perfil" class="form-control" type="file">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="rol_fk" class="form-label">Tipo de usuario</label>
            <select name="rol_fk" id="rol_fk" class="form-select" aria-label="Selección de tipo de usuario">
                <option selected>Seleccionar</option>
                <option value="1">Administrador</option>
                <option value="2">Visitante</option>
            </select>
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="bloqueado" class="form-label">Usuario bloqueado</label>
            <select name="bloqueado" id="bloqueado" class="form-select" aria-label="Selección de tipo de usuario">
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select>
        </div>

        <div class="opciones mt-4">
            <button type="button" id="guardar" class="btn btn-success">Guardar Cambios</button>
            <a href="CRUD-usuarios.php"><button type="button" id="cancelar" class="btn btn-danger">Cancelar</button></a>
        </div>
    </form>

</main>


<?php include "shared/footer.php" ?>