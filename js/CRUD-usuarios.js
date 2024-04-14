cargarTabla();
sessionStorage.setItem("username", null);

document.querySelector("tbody").addEventListener("click", (e) => {
    if (e.target.classList.contains("editar")) {
        // console.log("Modificar");
        //Obtenemos el nombre del usuario en una variable sessionStorage
        sessionStorage.setItem("username", e.target.closest("tr").childNodes[1].innerHTML);
        // console.log(sessionStorage.getItem("username"));
        location.href = "detalles-usuario.php";
    } else if (e.target.classList.contains("eliminar")) {
        let usuario = e.target.closest("tr").childNodes[1].innerHTML;
        eliminar(usuario);
    }
});


function cargarTabla() {

    $.ajax({
        type: "GET",
        url: "http://localhost:8080/usuarios",
        dataType: "JSON",
        success: function (response) {
            // console.log(response);
            let filas = "";
            response.forEach(dato => {
                filas += crearFilas(dato)
            });

            $("tbody").html(filas);
        },
        error: function (er) {
            console.log(er.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
}

function crearFilas(dato) {
    let bloq = "";
    if (dato.bloqueado == 0) {
        bloq = "No";
    } else {
        bloq = "Sí";
    }

    //validacion si tiene foto de perfil o no
    let foto = "";
    if (dato.foto_perfil == 0) {
        foto = `img/foto-predeterminada.webp`
    } else {
        foto = `img/fotos-usuarios/${dato.cedula}.jpg`
    }

    return `
    <tr>
        <th scope="row">${dato.nombre_usuario}</th>
            <td>${dato.correo}</td>
            <td>${dato.descripcion_usuario}</td>
            <td><img class="img-perfil" src="${foto}" alt="foto del usuario"></td>
            <td>${bloq}</td>
            <td>${dato.fecha_creacion}</td>
            <td>
                <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar usuario" class="boton-crud editar" src="img/icono-editar.png" alt="botón para editar">
                <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="Eliminar usuario" class="boton-crud eliminar" src="img/icono-eliminar.png" alt="botón para eliminar">
            </td>
        </tr>
    
    `;
}

function eliminar(usuario) {
    Swal.fire({
        title: "¿Estás seguro de eliminar este usurio?",
        text: "No podrás recuperar los datos.",
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: "Si",
        denyButtonText: `No`,
        icon: "warning"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "DELETE",
                url: `http://localhost:8080/eliminar-usuario/${usuario}`,
                dataType: "JSON",
                success: function (response) {
                    Swal.fire({
                        title: `Usuario ${usuario} eliminado`,
                        icon: "info"
                    });
                    cargarTabla();
                },
                error: function (er) {
                    console.log(er.statusText + er.responseText);
                },
                complete: function () {
                    console.log("Terminado");
                }
            });
        }
    });

}