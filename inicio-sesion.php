<? include "shared/header.php" ?>
<div class="row verificacion-usuario">
    <div class="titulo">
        <h1 id="mensaje"><strong>Verificación de Usuario</strong></h1>
    </div>
    <div class="row formulario-inicio">
        <h2>Inicio de Sesión</h2>
        <br>
        <div class="col-md-12 col-lg-12">
            <label for="usuario" class="form-label">Nombre de usuario</label>
            <input id="usuario" class="form-control" type="text" placeholder="Nombre_Usuario">
            <br>
            <label for="clave" class="form-label">Contraseña</label>
            <input id="clave" class="form-control" type="password" placeholder="••••••••••••••••">
            <div id="recuperar" class="form-text"> <a href="">He olvidado mi contraseña</a></div>
            <br>
            <button type="submit" class="btn btn-success">Ingresar</button>
            <button id="nueva-cuenta" type="button" class="btn btn-azul">Crear una cuenta</button>
        </div>
    </div>

    <!-- d-flex -->
    <div class="row crear-usuario">
        <h2>Formulario para crear tu usuario</h2>
        <br>
        <div class="col-md-12 col-lg-6">
            <label for="cedula" class="form-label">Cédula</label>
            <input id="cedula" class="form-control" type="text" placeholder="112233445">
            <br>
            <label for="nombre" class="form-label">Nombre</label>
            <input id="nombre" class="form-control" type="text" placeholder="Nombre">
            <br>
            <label for="apellido1" class="form-label">Primer Apellido</label>
            <input id="apellido1" class="form-control" type="text" placeholder="Apellido1">
            <br>
            <label for="apellido2" class="form-label">Segundo Apellido</label>
            <input id="apellido2" class="form-control" type="text" placeholder="Apellido2">
            <br>
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input id="correo" class="form-control" type="email" placeholder="ejemplo@correo.com">
            <br>
        </div>
        <div class="col-md-12 col-lg-6">
            <label for="telefono" class="form-label">Número de Teléfono</label>
            <input id="telefono" class="form-control" type="text" placeholder="88886666">
            <br>
            <label for="usuario" class="form-label">Nombre de Usuario</label>
            <input id="usuario" class="form-control" type="text" placeholder="Nombre_Usuario33">
            <br>
            <label for="clave" class="form-label">Contraseña</label>
            <input id="clave" class="form-control" type="password" placeholder="••••••••••••••••">
            <br>
            <label for="foto" class="form-label">Foto de Usuario</label>
            <input class="form-control" type="file" id="foto">
        </div>
        <div class="col-md-12 confirmacion">
            <div class="mb-3 form-check d-block">
                <label class="form-check-label" for="exampleCheck1"><input type="checkbox" class="form-check-input" id="exampleCheck1">
                    Al crear una cuenta, acepta nuestra <a href="">Política de Privacidad</a></label>
            </div>
            <button type="submit" id="crear-cuenta" class="btn btn-azul">¡Crear Cuenta!</button>
        </div>
    </div>

</div>


<? include "shared/footer.php" ?>