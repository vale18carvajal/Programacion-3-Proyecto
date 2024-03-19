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
            <option selected>Seleccionar</option>
            <option value="disponible">Dispoible</option>
            <option value="no-disponible">No Disponible</option>
        </select>
    </div>

    <div class="col-md-12 col-lg-4">
        <label for="provincia"><strong>Provincia</strong></label>
        <select id="provincia" class="form-select col-md-6 col-lg-6" aria-label="Provincia">
            <option selected>Seleccionar</option>
            <option value="san jose">San José</option>
            <option value="cartago">Cartago</option>
            <option value="alajuela">Alajuela</option>
            <option value="heredia">Heredia</option>
            <option value="guanacaste">Guanacaste</option>
            <option value="puntarenas">Puntarenas</option>
            <option value="limon">Limón</option>
        </select>
    </div>

    <div class="col-md-12 col-lg-4">
        <label for="tipo"><strong>Tipo de inmueble</strong></label>
        <select id="tipo" class="form-select" aria-label="Tipo de propiedad">
            <option selected>Seleccionar</option>
            <option value="casa">Casa</option>
            <option value="apartamento">Apartamento</option>
            <option value="terreno">Terreno</option>
        </select>
    </div>
    <div class=" hh">
        <button id="btn-generar" class="btn btn-azul">Generar Reporte</button>
    </div>
</div>

<div class="separador"></div>

<div class="row reporte">
    <div class="h">
        <h3>Visualización de Reportes</h3>
        <button id="btn-pdf" class="btn btn-azul">Generar Reporte en PDF</button>
        <p id="mensaje"><br>No hay reporte disponible.</p>

        <!-- tabla de reportes -->

        <table class="table table-striped">
            <!-- <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">PROVINCIA</th>
                    <th scope="col">DISPONIBILIDAD</th>
                    <th scope="col">COD. VENDEDOR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Apartamento</td>
                    <td>San José</td>
                    <td>No disponible</td>
                    <td>23472</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Casa</td>
                    <td>Guanacaste</td>
                    <td>Disponible</td>
                    <td>84745</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Terreno</td>
                    <td>Cartago</td>
                    <td>Disponible</td>
                    <td>57923</td>
                </tr>
            </tbody> -->
        </table>
    </div>
</div>




<!-- Se el footer se coloca en un contenedor para atribuirle la clase fixed bottom en esta página de reportes -->
<!-- class="fixed-bottom" -->
<div class="d-footer">
    <? include "shared/footer.php" ?>
</div>