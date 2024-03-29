<? include "shared/header.php" ?>
<main>
    <h1>Centro de Usuarios</h1>


    <a href="detalles-usuario.php"><button id="agregar-usuario" class="btn btn-success"><img src="img/icono-añadir-persona.png" alt="añadir">Añadir</button></a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">USUARIO</th>
                <th scope="col">CORREO</th>
                <th scope="col">ROL</th>
                <th scope="col">FOTO</th>
                <th scope="col">BLOQUEADO</th>
                <th scope="col">FECHA DE CREACIÓN</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">valecm</th>
                <td>valeriacarvajal@gmail.com</td>
                <td>Admin</td>
                <td><img class="img-perfil" src="img/Foto-perfil-usuario.jpg" alt="foto del usuario"></td>
                <td>No bloqueado</td>
                <td>20/03/2024</td>
                <td>
                    <a href="detalles-usuario.php"><img class="boton-crud" src="img/icono-editar.png" alt="botón para editar"></a>
                    <a href=""><img class="boton-crud" src="img/icono-eliminar.png" alt="botón para eliminar"></a>
                </td>
            </tr>
        </tbody>
    </table>
</main>

<? include "shared/footer.php" ?>