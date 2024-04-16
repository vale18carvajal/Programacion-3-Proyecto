cargarTabla();
sessionStorage.setItem("idInmueble", null);
document.querySelector("tbody").addEventListener("click", (e) => {
    if (e.target.classList.contains("boton-crud-visualizar")) {
        // console.log("Modificar");
        //Obtenemos el id del inmueble en una variable sessionStorage
        sessionStorage.setItem("idInmueble", e.target.closest("tr").childNodes[1].innerHTML);
        // console.log(sessionStorage.getItem("idInmueble"));
        location.href = "detalles-propiedad.php";
    } else if (e.target.classList.contains("eliminar")) {
        let inmueble = e.target.closest("tr").childNodes[1].innerHTML;
        eliminar(inmueble);
    }
});

function cargarTabla() {
    //Validamos el tipo de usuario
    if (sessionStorage.getItem("rol") == 1) {
        //Para usuario administrador
        $.ajax({
            type: "GET",
            url: "http://localhost:8080/inmuebles",
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
                console.log(err.statusText + er.responseText);
            },
            complete: function () {
                console.log("Terminado");
            }
        });
    } else {
        //Para usuario visitante
        $.ajax({
            type: "GET",
            url: `http://localhost:8080/inmuebles-usuario/${sessionStorage.getItem("activo")}`,
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
                console.log(err.statusText + er.responseText);
            },
            complete: function () {
                console.log("Terminado");
            }
        });
    }
}

function crearFilas(dato) {
    return `
    <tr>
        <th scope="row">${dato.id}</th>
        <td>${dato.nombre_inmueble}</td>
        <td><img class="img-propiedad" src="img/fotos-propiedades/${dato.id}-img1.jpg" alt="foto del usuario"></td>
        <td>${dato.descripcion_estado}</td>
        <td>${dato.codigo_vendedor}</td>
        <td>
            <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ver más detalles" class="boton-crud-visualizar" src="img/icono-visualizar.png" alt="botón para editar">
            <img data-bs-toggle="tooltip" data-bs-placement="bottom" title="Eliminar" class="boton-crud-eliminar eliminar" src="img/icono-eliminar.png" alt="botón para eliminar">
        </td>
    </tr>
    `;
}

function eliminar(prop) {
    Swal.fire({
        title: "¿Estás seguro de eliminar esta propiedad?",
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
                url: `http://localhost:8080/eliminar-inmueble/${prop}`,
                dataType: "JSON",
                success: function (response) {
                    Swal.fire({
                        title: `Propiedad No.${prop} eliminada`,
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