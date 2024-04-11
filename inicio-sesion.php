<? include "shared/header.php" ?>
<div class="row verificacion-usuario">
    <div class="titulo">
        <h1 id="mensaje"><strong>Verificación de Usuario</strong></h1>
    </div>
    <div class="row formulario-inicio">
        <h2>Inicio de Sesión</h2>
        <br>
        <div class="col-md-12 col-lg-12">
            <label for="nombre_usuario" class="form-label">Nombre de usuario</label>
            <input id="nombre_usuario" class="form-control" type="text" placeholder="Nombre_Usuario" required>
            <br>
            <label for="clave" class="form-label">Contraseña</label>
            <input id="clave" class="form-control" type="password" placeholder="••••••••••••••••" required>
            <div id="recuperar" class="form-text"> <a href="">He olvidado mi contraseña</a></div>
            <br>
            <button id="ingresar"class="btn btn-success">Ingresar</button>
            <button id="nueva-cuenta" type="button" class="btn btn-azul">Crear una cuenta</button>
        </div>
    </div>

    <form class="row crear-usuario">
        <h2>Formulario para crear tu usuario</h2>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="cedula" class="form-label">Cédula</label>
            <input name="cedula" id="cedula" class="form-control">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" id="nombre" class="form-control">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="apellido1" class="form-label">Primer Apellido</label>
            <input name="apellido1" id="apellido1" class="form-control">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="apellido2" class="form-label">Segundo Apellido</label>
            <input name="apellido2" id="apellido2" class="form-control">
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
            <input name="nombre_usuario" id="nombre_usuario" class="form-control">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="clave" class="form-label">Contraseña</label>
            <input name="clave" id="clave" class="form-control" type="password">
        </div>
        <div class="col-md-12 col-lg-6 mt-3">
            <label for="foto_perfil" class="form-label">Foto de Usuario</label>
            <input name="foto_perfil" id="foto_perfil" class="form-control" type="file">
        </div>
        <div class="col-md-12 confirmacion mt-4">
            <div class="mb-3 form-check d-block">
                <label class="form-check-label" for="exampleCheck1"><input name="confirmacion" id="confirmacion" type="checkbox" class="form-check-input">
                    Al crear una cuenta, acepta nuestra <a data-bs-toggle="modal" data-bs-target="#modal" id="politicas">Política de Privacidad</a></label>
            </div>
            <button id="crear-cuenta" class="btn btn-azul" type="button">¡Crear Cuenta!</button>
        </div>
</form>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="Modal de políticas de Privacidad" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Política de Privacidad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Esta Política de Privacidad describe cómo Vende tu Inmueble S.A. recopila, utiliza y comparte la información personal de los usuarios que utilizan nuestros servicios para la compra de bienes raíces, incluidas casas, apartamentos y terrenos, a través de nuestra plataforma en línea.
                        <br>
                        Al aceptar esta Política de Privacidad, usted reconoce y acepta expresamente que nosotros podamos recopilar, utilizar y compartir su información personal de acuerdo con los términos y condiciones establecidos a continuación:
                        <br>
                        <strong>1. Información que Recopilamos:</strong>
                        <br>
                        Recopilamos diversos tipos de información personal cuando crea una cuenta de usuario en nuestra plataforma. Esta información puede incluir, pero no se limita a:
                        <br>
                    <ul>
                        <li>Nombre y apellidos.</li>
                        <li>Número de identificación o cédula.</li>
                        <li>Dirección de correo electrónico.</li>
                        <li>Contraseña.</li>
                        <li>Fotografía de perfil.</li>
                        <li>Fecha de nacimiento.</li>
                        <li>Número de teléfono.</li>
                        <li>Nombre de usuario.</li>
                    </ul>
                    <br>
                    <strong>2. Uso de la Información:</strong>
                    <br>
                    Utilizamos la información personal recopilada para los siguientes fines:
                    <br>
                    <ul>
                        <li>Facilitar la creación y gestión de su cuenta de usuario.</li>
                        <li>Permitir la comunicación entre usted y otros usuarios.</li>
                        <li>Procesar transacciones relacionadas con la compra de bienes raíces.</li>
                        <li>Proporcionarle información sobre productos, servicios y ofertas relevantes.</li>
                        <li>Personalizar su experiencia en nuestra plataforma.</li>
                        <li>Cumplir con nuestras obligaciones legales y regulaciones aplicables.</li>
                    </ul>
                    <br>
                    <strong>3. Compartir de la Información:</strong>
                    <br>
                    Podemos compartir su información personal con terceros en las siguientes circunstancias:
                    <br>
                    <ul>
                        <li>Con proveedores de servicios que nos ayudan a operar nuestro negocio y brindar nuestros servicios, sujetos a acuerdos de confidencialidad adecuados.</li>
                        <li>Con autoridades gubernamentales u otras partes conforme a la ley o en respuesta a procesos legales válidos.</li>
                        <li>En caso de fusión, adquisición o venta de activos, en cuyo caso transferiremos la información personal a la parte adquirente.</li>
                    </ul>
                    <br>
                    <strong>4. Seguridad de la Información:</strong>
                    <br>
                    Implementamos medidas de seguridad técnicas, administrativas y físicas para proteger su información personal contra el acceso no autorizado, la divulgación o el uso indebido.
                    <br>
                    <strong>5. Sus Derechos:</strong>
                    <br>
                    Usted tiene derechos sobre su información personal, incluido el derecho a acceder, corregir, eliminar y objetar el procesamiento de sus datos personales. Puede ejercer estos derechos enviándonos una solicitud a través de los medios de contacto proporcionados al final de esta Política de Privacidad.
                    <br>
                    <strong>6. Cambios en la Política de Privacidad:</strong>
                    <br>
                    Nos reservamos el derecho de actualizar esta Política de Privacidad en cualquier momento. Le notificaremos sobre cambios significativos en la forma en que tratamos su información personal enviándole una notificación a través de los detalles de contacto proporcionados en su cuenta de usuario.
                    <br>
                    <strong>7. Consentimiento:</strong>
                    <br>
                    Al aceptar esta Política de Privacidad y al utilizar nuestros servicios, usted consiente expresamente a la recopilación, uso y divulgación de su información personal de acuerdo con los términos y condiciones aquí establecidos.
                    <br>
                    <strong>8. Contacto:</strong>
                    <br>
                    Si tiene alguna pregunta o inquietud sobre esta Política de Privacidad o sobre el tratamiento de su información personal, no dude en ponerse en contacto con nosotros a través de vende_tu_inmueble@vtm.com
                    <br>
                    <br>
                    Fecha de Entrada en Vigencia: 20 de marzo del 2024
                    <br>
                    Última actualización: 20 de marzo del 2024</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>

</div>


<? include "shared/footer.php" ?>