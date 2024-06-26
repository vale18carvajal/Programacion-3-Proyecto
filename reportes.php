<? include "shared/header.php" ?>
<h1>Centro de reportes</h1>


<div class="row filtro">
    <div class="col-md-12 col-lg-12">
        <h3>Generador de reportes</h3>
        <p>Puede generar un reporte general de todas las propiedades o utilizar los filtros para un reporte más específico:</p>
    </div>

    <div class="col-md-12 col-lg-4">
        <label for="disponibilidad"><strong>Disponibilidad</strong></label>
        <select id="disponibilidad" class="form-select" aria-label="Tipo de propiedad">
            <option value="0" selected>Seleccionar</option>
            <option value="1">Disponible</option>
            <option value="2">No Disponible</option>
        </select>
    </div>

    <div class="col-md-12 col-lg-4">
        <label for="provincia"><strong>Provincia</strong></label>
        <select id="provincia" class="form-select col-md-6 col-lg-6" aria-label="Provincia">
            <option value="0" selected>Seleccionar</option>
            <option value="1">San José</option>
            <option value="2">Cartago</option>
            <option value="3">Alajuela</option>
            <option value="4">Heredia</option>
            <option value="5">Guanacaste</option>
            <option value="6">Puntarenas</option>
            <option value="7">Limón</option>
        </select>
    </div>

    <div class="col-md-12 col-lg-4">
        <label for="tipo"><strong>Tipo de inmueble</strong></label>
        <select id="tipo" class="form-select" aria-label="Tipo de propiedad">
            <option value="0" selected>Seleccionar</option>
            <option value="1">Casa</option>
            <option value="2">Apartamento</option>
            <option value="3">Terreno</option>
        </select>
    </div>
    <div>
        <button id="btn-generar" class="btn btn-azul">Generar Reporte</button>
    </div>
</div>

<div class="separador"></div>

<div class="row reporte">
    <div class="h">
        <h3>Visualización de Reportes</h3>
        <button id="btn-pdf" class="btn btn-azul">Generar Reporte en PDF</button>
        <p id="mensaje"><br>No hay reporte.<br><i class="fa-solid fa-eye-slash"></i></p>

        <!-- tabla de reportes -->

        <table id="reporte" class="table table-striped text-center" hidden>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">PROVINCIA</th>
                    <th scope="col">DISPONIBILIDAD</th>
                    <th scope="col">COD. VENDEDOR</th>
                </tr>
            </thead>
            <tbody>
                <!-- Se muestran datos de forma dinámica -->
            </tbody>
        </table>
    </div>
</div>




<!-- Se el footer se coloca en un contenedor para atribuirle la clase fixed bottom en esta página de reportes -->
<!-- class="fixed-bottom" -->
<div class="d-footer">
    <? include "shared/footer.php" ?>
</div>