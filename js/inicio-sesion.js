$("#nueva-cuenta").click(function (e) {
    $(".crear-usuario").css("display", "flex");
    $(".formulario-inicio").css("display", "none");
    $("#mensaje").html(`<strong> Nuevo Usuario </strong>`);
});


$("#ingresar").click(function (e) {
  
    const username = $(".formulario-inicio #nombre_usuario").val().trim();
    const pass = $(".formulario-inicio #clave").val().trim();

    if (username != '' && pass != '') {
        $.ajax({
            type: "GET",
            url: `http://localhost:8080/iniciarSesion/${username}/${pass}`,
            success: function (response) {
                if (response == 1) {
                    //variable de usuario activo
                    sessionStorage.setItem("activo", username);
                    //dirigirse al perfil;
                    location.href = "perfil-usuario.php"
                } else {
                    return Swal.fire({
                        title: "Usuario o contraseña incorrectos",
                        text: "Por favor intente de nuevo",
                        icon: "error"
                    });
                }
    
            },
            error: function (er) {
                console.log(err.statusText + er.responseText);
            },
            complete: function () {
                console.log("Terminado");
            }
        });
    } else {
        return Swal.fire({
            title: "Faltan datos",
            text: "Por favor ingrese el nombre de usuario y contraseña",
            icon: "warning"
        });
    }
});

let validacionNuevoUsuario = $(".crear-usuario").validate({
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
        clave: {
            required: true,
            minlength: 8,
            maxlength: 25
        },
        confirmacion: {
            required: true
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
        clave: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`,
            minlength: `<i class="fa-solid fa-circle-exclamation"></i> Su contraseña de tener mínimo 8 carcteres`,
            maxlength: `<i class="fa-solid fa-circle-exclamation"></i> Su contraseña no puede tener más de 25 caracteres`
        },
        confirmacion: {
            required: function () {
                Swal.fire({
                    title: "Atención",
                    text: "Para continuar, es necesario aceptar nuestra política de privacidad. Por favor, revisa y acepta los términos para completar el proceso de creación de cuenta.",
                    icon: "warning"
                });
            }
        }
    }
});

$("#crear-cuenta").click(function (e) {
    // e.preventDefault();
    if (validacionNuevoUsuario.form()) {

        if ($('#confirmacion').is(':checked')) {
            //Generar los parámetros
            const datos = $(".crear-usuario").serialize();
            const accion = "usuario";
            const peticion = "POST";
            guardarUsuario(datos, accion, peticion);

            $(".crear-usuario").css("display", "none");
            $(".formulario-inicio").css("display", "flex");
            $("#mensaje").html(`<strong> Verificación de Usuario </strong>`);

            Swal.fire({
                title: "¡Perfecto!",
                text: "Se ha creado tu nuevo usuario",
                icon: "success"
            });
        }
    }
});

function guardarUsuario(datos, accion, peticion) {
    $.ajax({
        type: peticion,
        url: `http://localhost:8080/${accion}?${datos}`,
        success: function (response) {
            // console.log(response);
        },
        error: function (er) {
            console.log(err.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
}