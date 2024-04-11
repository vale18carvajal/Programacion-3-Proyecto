<? include "shared/header.php" ?>
<main>
    <div class="perfil">
        <div class="propiedades-usuario">
            <!-- <label id="cerrar-sesion">Cerrar Sesión</label>
        <span><button id="" class="btn btn-azul">Mis propiedades</button></span> -->
            <div class="nav-item dropdown justify-align-content-end">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Opciones
                </a>
                <ul class="dropdown-menu">
                    <li id="CRUD-propiedades" hidden><a class="dropdown-item" href="CRUD-propiedades.php">Propiedades</a></li>
                    <li id="reportes" hidden><a class="dropdown-item" href="reportes.php">Generar reporte</a></li>
                    <li id="CRUD-usuarios" hidden><a class="dropdown-item" href="CRUD-usuarios.php">Control de usuarios</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
        <!-- <div class="f"> -->

        <!-- </div> -->

        <div class="vista">
            <h1>Mi perfil</h1>
            <img id="foto" src="img/foto-predeterminada.webp" alt="Foto de perfil del usuario">
            <h3 id="nombreUsuario">Nombre de usuario</h3>
        </div>
        <div class="separador"></div>
        <form class="row usuario-info">
            <h2>Información de Cuenta</h2>
            <br>
            <div class="col-md-12 col-lg-6">
                <label for="cedula" class="form-label">Cédula</label>
                <input name="cedula" id="cedula" class="form-control" type="text" placeholder="112233445" disabled>
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input name="nombre" id="nombre" class="form-control" type="text" placeholder="Nombre" disabled>
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="apellido1" class="form-label">Primer Apellido</label>
                <input name="apellido1" id="apellido1" class="form-control" type="text" placeholder="Apellido1" disabled>
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="apellido2" class="form-label">Segundo Apellido</label>
                <input name="apellido2" id="apellido2" class="form-control" type="text" placeholder="Apellido2" disabled>
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" type="date" disabled>
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input name="correo" id="correo" class="form-control" type="email" placeholder="ejemplo@correo.com" disabled>
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="telefono" class="form-label">Número de Teléfono</label>
                <input name="telefono" id="telefono" class="form-control" type="text" placeholder="88886666" disabled>
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="nombre_usuario" class="form-label">Nombre de Usuario</label>
                <input name="nombre_usuario" id="nombre_usuario" class="form-control" type="text" placeholder="Nombre_Usuario33" disabled>
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="clave" class="form-label">Contraseña</label>
                <input name="clave" id="clave" class="form-control" type="password" placeholder="••••••••••••••••" disabled>
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="foto" class="form-label">Foto de Usuario</label>
                <input name="foto" class="form-control" type="file" id="foto" disabled>
            </div>
            <div class="col-md-12 col-lg-12 botones">
                <!-- botones - display: inline -->
                <button type="button" id="actualizar" class="btn btn-azul">Actualizar datos</button>
                <button type="button" id="cancelar" class="btn btn-azul">Cancelar</button>
                <button type="button" id="confirmar" class="btn btn-success">Confirmar cambios</button>
            </div>

        </form>
</main>
<? include "shared/footer.php" ?>