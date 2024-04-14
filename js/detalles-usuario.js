let OPC = -1;
if (sessionStorage.getItem("username") !== 'null') {
    console.log("hola");
    let username = sessionStorage.getItem("username");
    cargarCampos(username);
    OPC = 1;
    deshabilitar();
}
//Validaciones
let validacionCampos = $(".info-usuario").validate({
    rules: {
        cedula: {
            required: true,
            number: true,
            rangelength: [9, 9]
        },
        nombre: {
            required: true
        },
        apellido1: {
            required: true
        },
        apellido2: {
            required: true
        },
        fecha_nacimiento: {
            required: true
        },
        correo: {
            required: true,
            email: true
        },
        telefono: {
            required: true,
            number: true,
            rangelength: [8, 8]
        },
        nombre_usuario: {
            required: true
        },
        rol_fk: {
            min: 1
        }
    },
    messages: {
        cedula: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`,
            number: `<i class="fa-solid fa-circle-exclamation"></i> Debe ingresar solo valores numéricos`,
            rangelength: `<i class="fa-solid fa-circle-exclamation"></i> La cédula debe tener nueve dígitos`
        },
        nombre: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`
        },
        apellido1: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`
        },
        apellido2: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`
        },
        fecha_nacimiento: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`
        },
        correo: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`,
            email: `<i class="fa-solid fa-circle-exclamation"></i> Debe introducir una dirección de correo válida`
        },
        telefono: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`,
            number: `<i class="fa-solid fa-circle-exclamation"></i> Debe ingresar solo números`,
            rangelength: `<i class="fa-solid fa-circle-exclamation"></i> Debe ingresar ocho dígitos`
        },
        nombre_usuario: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`
        },
        rol_fk: {
            min: `<i class="fa-solid fa-circle-exclamation"></i> Debe seleccionar un tipo de usuario`
        },
        bloqueado: {
            min: `<i class="fa-solid fa-circle-exclamation"></i> Debe indicar el estado del usuario`
        }
    }
});

$("#guardar").click(function (e) {
    // e.preventDefault();
    if (validacionCampos.form()) {
        guardar();
    }
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
            if (response.foto_perfil == 0) {
                $("#foto").attr("src", `img/foto-predeterminada.webp`);
            } else {
                $("#foto").attr("src", `img/fotos-usuarios/${response.cedula}.jpg`);
            }

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

    let foto = $('#foto_perfil')[0].files[0];
    // Crear un objeto de formulario
    let formData = new FormData();
    //Añadir la imagen como objeto form-data
    formData.append('imagen', foto);

    $.ajax({
        type: peticion,
        url: `http://localhost:8080/${accion}?${datos}`,
        data: formData,
        processData: false,
        contentType: false,
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
            sessionStorage.setItem("username", $("#nombre_usuario").val());
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

function deshabilitar() {
    $("#cedula").attr("disabled", true);
}

function habilitar() {
    $("#cedula").attr("disabled", false);
}