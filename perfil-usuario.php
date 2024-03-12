<? include "shared/header.php" ?>

<div class="perfil">
    <div class="propiedades-usuario">
        <label id="cerrar-sesion">Cerrar Sesión</label>
        <span><button id="" class="btn btn-azul">Mis propiedades</button></span>
    </div>
    <div class="vista">
        <h1>Mi perfil</h1>
        <img src="img/Foto-perfil-usuario.jpg" alt="Foto de perfil del usuario">
        <h3>Nombre de usuario</h3>
    </div>
    <div class="separador"></div>
    <div class=" row usuario-info">
        <h2>Información de Cuenta</h2>
        <br>
        <div class="col-md-12 col-lg-6">
            <label for="cedula" class="form-label">Cédula</label>
            <input id="cedula" class="form-control" type="text" placeholder="112233445" disabled>
            <br>
            <label for="nombre" class="form-label">Nombre</label>
            <input id="nombre" class="form-control" type="text" placeholder="Nombre" disabled>
            <br>
            <label for="apellido1" class="form-label">Primer Apellido</label>
            <input id="apellido1" class="form-control" type="text" placeholder="Apellido1" disabled>
            <br>
            <label for="apellido2" class="form-label">Segundo Apellido</label>
            <input id="apellido2" class="form-control" type="text" placeholder="Apellido2" disabled>
            <br>
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input id="correo" class="form-control" type="email" placeholder="ejemplo@correo.com" disabled>
            <br>
        </div>
        <div class="col-md-12 col-lg-6">
            <label for="telefono" class="form-label">Número de Teléfono</label>
            <input id="telefono" class="form-control" type="text" placeholder="88886666" disabled>
            <br>
            <label for="usuario" class="form-label">Nombre de Usuario</label>
            <input id="usuario" class="form-control" type="text" placeholder="Nombre_Usuario33" disabled>
            <br>
            <label for="clave" class="form-label">Contraseña</label>
            <input id="clave" class="form-control" type="password" placeholder="••••••••••••••••" disabled>
            <br>
            <label for="foto" class="form-label">Foto de Usuario</label>
            <input class="form-control" type="file" id="foto" disabled>
        </div>
        <div class="col-md-12 col-lg-12 botones">
            <!-- botones - display: inline -->
            <button type="button" id="actualizar" class="btn btn-azul">Actualizar datos</button>
            <button type="button" id="cancelar" class="btn btn-azul">Cancelar</button>
            <button type="submit" id="confirmar" class="btn btn-success">Confirmar cambios</button>
        </div>
    </div>
</div>
<? include "shared/footer.php" ?>