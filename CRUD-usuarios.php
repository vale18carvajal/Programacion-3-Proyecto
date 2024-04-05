<? include "shared/header.php" ?>
<main>
    <h1>Centro de Usuarios</h1>


    <a href="detalles-usuario.php"><button id="agregar-usuario" class="btn btn-success"><img src="img/icono-añadir-persona.png" alt="añadir">Añadir</button></a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">USUARIO</th>
                <th scope="col">CORREO</th>
                <th scope="col">ROL</th>
                <th scope="col">FOTO</th>
                <th scope="col">BLOQUEADO</th>
                <th scope="col">FECHA Y HORA DE CREACIÓN</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <!-- Descarga Dinámica -->
        </tbody>
    </table>
</main>

<? include "shared/footer.php" ?>