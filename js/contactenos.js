//Campo de asunto personalizado
$('#asunto').change(function () {
    let seleccion = $(this).val();
    if (seleccion == 5) {
        $('.otroAsunto').attr('hidden', false);
        console.log("Hola Mundo")
    } else {
        $('.otroAsunto').attr('hidden', true);
    }
});

//Validaciones para enviar formulario
var validacionEnvio = $(".formulario").validate({
    rules: {
        nombre: {
            required: true,
        },
        apellidos: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        asunto:{
            min: 1,
        },
        mensaje: {
            required: true,
            minlength: 20,
            maxlength: 500
        },
        otro: {
            required: true,
        }
    },
    messages: {
        nombre: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Debe ingresar su nombre`
        },
        apellidos: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Debe ingresar sus apellidos`
        },
        email: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Debe ingresar su email`,
            email: `<i class="fa-solid fa-circle-exclamation"></i> Debe ingresar una dirección de correo válida`
        },
        asunto:{
            min: `<i class="fa-solid fa-circle-exclamation"></i> Debe seleccionar un asunto`
        },
        mensaje: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`,
            minlength: `<i class="fa-solid fa-circle-exclamation"></i> Debe ingresar más de 20 caracteres`,
            maxlength: `<i class="fa-solid fa-circle-exclamation"></i> Debe ingresar menos de 500 caracteres`
        },
        otro: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Debe especificar un asunto`,
        }

    }
});

$(".enviar").click(function (e) { 
    // e.preventDefault();
    if (validacionEnvio.form()) {
        Swal.fire({
            title: "Mensaje enviado",
            text: "Te atenderemos pronto",
            icon: "success"
        });
    }
});