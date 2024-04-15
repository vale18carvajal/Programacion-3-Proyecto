let usuario = sessionStorage.getItem("activo");
cargarCampos(usuario);

$("#actualizar").click(function (e) {
    modoEdicion();
});

$("#cancelar").click(function (e) {
    deshabilitar();
    //PENDIENTE VOLVER A LLAMAR LOS DATOS DE LA BASE DE DATOS POR SI HA OCURRIDO ALGUN CAMBIO SIN GUARDAR
});

$("#confirmar").click(function (e) {
    guardar();
});

$("#cerrar").click(function (e) { 
    //e.preventDefault();
    sessionStorage.clear();
    location.href = "index.php"
});

function modoEdicion() {
    //Abrir campos para editar datos
    $("input").attr("disabled", false);
    $("#cedula").attr("disabled", true);
    $("#cancelar").css("display", "inline");
    $("#confirmar").css("display", "inline");
    $("#actualizar").css("display", "none");
}

function habilitar() {
    $(".usuario-info input").attr("disabled", false);
}

function deshabilitar() {
    //reestablecer campos desabilitados y botones
    $("input").attr("disabled", true);
    $("#cancelar").css("display", "none");
    $("#confirmar").css("display", "none");
    $("#actualizar").css("display", "inline");
}

function cargarCampos(username) {
    habilitar();
    $.ajax({
        type: "GET",
        url: `http://localhost:8080/buscar-usuario/${username}`,
        dataType: "JSON",
        success: function (response) {
            //  Obtengo un arreglo de todos los input a llenar por medio de su propiedad name
            let campos = $('*[name]');

            //Se llenan los campos con los valores obtenidos de la base de datos
            for (let i = 0; i < campos.length; i++) {
                if (campos[i].type != "file") {
                    $(campos[i]).val(response[campos[i].name]);
                }
            }

            //Colocar la foto de perfil
            if (response.foto_perfil == 0) {
                $("#foto").attr("src", `img/foto-predeterminada.webp`);
            } else {
                $("#foto").attr("src", `img/fotos-usuarios/${response.cedula}.jpg`);
            }

            //Colocar nombre de usuario en el encabezado del form
            $("#nombreUsuario").html(response.nombre_usuario)

            //Validacion de tipo de usuario para mostrar opciones
            if (response.rol_fk == 1) {
                $("#CRUD-propiedades").attr("hidden", false);
                $("#reportes").attr("hidden", false);
                $("#CRUD-usuarios").attr("hidden", false);
            }

        },
        error: function (er) {
            console.log(er.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
    deshabilitar();
}


function guardar() {
    //Habilitamos el campo cedula para añadirlo a la variable datos
    habilitar();
    const datos = $(".usuario-info").serialize();
    // console.log(datos);
    deshabilitar();
    $.ajax({
        type: "PUT",
        url: `http://localhost:8080/modificar-usuario?${datos}`,
        success: function (response) {
            Swal.fire({
                title: "Mensaje",
                text: "Se han modificado los datos del usuario",
                icon: "success"
            });

            //Guardar el nuevo nombre de usuario si se ha cambiado para recargar la página
            sessionStorage.setItem("activo", $("#nombre_usuario").val());
            usuario = sessionStorage.getItem("activo");
            cargarCampos(usuario);
        },
        error: function (er) {
            console.log(er.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
}