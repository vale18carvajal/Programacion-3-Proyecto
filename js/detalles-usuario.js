let OPC= -1;
if (sessionStorage.getItem("username") != "null") {
    let username = sessionStorage.getItem("username");
    cargarCampos(username);
    OPC = 1;
    deshabilitar();
} 

$("#guardar").click(function (e) {
    e.preventDefault();
    guardar();
});

$("#regresar").click(function (e) {
    sessionStorage.setItem("username", null);
});

$("#cancelar").click(function (e) {
    sessionStorage.setItem("username", null);
});

function cargarCampos(username) {
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

            //Colocar la foto de perfil y nombre de usuario en el encabezado del form
            $("#foto").attr("src", `img/${response.foto_perfil}`);
            $("#nombreUsuario").html(response.nombre_usuario)

        },
        error: function (er) {
            console.log(er.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
}

function guardar() {
    //Habilitamos el campo cedula para añadirlo a la variable datos
    habilitar();
    const datos = $(".info-usuario").serialize();
    deshabilitar();
    const accion = (OPC == -1) ? "usuario" : "modificar-usuario";
    const peticion = (OPC == -1) ? "POST" : "PUT";

    $.ajax({
        type: peticion,
        url: `http://localhost:8080/${accion}?${datos}`,
        success: function (response) {
            if (OPC == -1) {
                Swal.fire({
                    title: "¡Perfecto!",
                    text: "Has creado un nuevo usuario",
                    icon: "success"
                });
            } else {
                Swal.fire({
                    title: "Mensaje",
                    text: "Se han modificado los datos del usuario",
                    icon: "success"
                });
            }
            //Guardar el nuevo nombre de usuario si se ha cambiado para recargar la página
            sessionStorage.setItem("username",$("#nombre_usuario").val());
            username = sessionStorage.getItem("username");
            cargarCampos(username);
        },
        error: function (er) {
            console.log(err.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
}

function deshabilitar(){
    $("#cedula").attr("disabled", true);
}

function habilitar(){
    $("#cedula").attr("disabled", false);
}