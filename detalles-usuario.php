<?php include "shared/header.php" ?>

<main>
    <h2>Información del usuario</h2>
        <form class="row info-usuario mb-5">
            <div class="foto mt-3">
                <img id="foto-perfil" src="img/foto-predeterminada.webp" alt="Foto de perfil del usuario">
                <h4 id="nombreUsuario">Usuario</h4>
            </div>
            
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="cedula" class="form-label">Cédula</label>
                <input name="cedula" id="cedula" class="form-control" type="number" min="100000000" max="999999999" required>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input name="nombre" id="nombre" class="form-control" type="text" required>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="apellido1" class="form-label">Primer Apellido</label>
                <input name="apellido1" id="apellido1" class="form-control" type="text" required>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="apellido2" class="form-label">Segundo Apellido</label>
                <input name="apellido2" id="apellido2" class="form-control" type="text" required>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input name="nacimiento" id="nacimiento" class="form-control" type="date" required>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input name="correo" id="correo" class="form-control" type="email" required>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="telefono" class="form-label">Número de Teléfono</label>
                <input name="telefono" id="telefono" class="form-control" type="number" required min="0">
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="usuario" class="form-label">Nombre de Usuario</label>
                <input name="usuario" id="usuario" class="form-control" type="text" required>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="clave" class="form-label">Contraseña (Temporal)</label>
                <input name="clave" id="clave" class="form-control" type="password" required>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="foto" class="form-label">Foto de Usuario</label>
                <input name="foto" id="foto" class="form-control" type="file">
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="rol" class="form-label">Tipo de usuario</label>
                <select id="rol" class="form-select" aria-label="Selección de tipo de usuario">
                    <option value="1">Administrador</option>
                    <option value="2">Visitante</option>
                </select>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
                <label for="bloqueo" class="form-label">Usuario bloqueado</label>
                <select id="bloqueo" class="form-select" aria-label="Selección de tipo de usuario">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>

            <div class="opciones mt-4">
                <button type="submit" id="guardar" class="btn btn-success">Guardar Cambios</button>
                <a href="CRUD-usuarios.php"><button type="button" id="cancelar" class="btn btn-danger">Cancelar</button></a>
            </div>
        </form>

</main>


<?php include "shared/footer.php" ?>