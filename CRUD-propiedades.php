<?php include "shared/header.php" ?>
<main class="p-4">
    <h1>Centro de Propiedades</h1>
    <a href="detalles-propiedad.php"><button id="agregar-propiedad" class="btn btn-success"><img src="img/icono-añadir-persona.png" alt="añadir">Añadir</button></a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">IMAGEN</th>
                <th scope="col">DISPONIBILIDAD</th>
                <th scope="col">ID-VENDEDOR</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <!-- Inclusión de datos dinámica -->
        </tbody>
    </table>

</main>

<?php include "shared/footer.php" ?>