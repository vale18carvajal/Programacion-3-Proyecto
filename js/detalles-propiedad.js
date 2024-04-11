deshabilitar();
edicion();
let OPC = -1;
let inmueble = "";
if (sessionStorage.getItem("idInmueble") != 'null') {
    inmueble = sessionStorage.getItem("idInmueble");
    cargarCampos(inmueble);
    deshabilitar();
    OPC = 1;
} else {
    //Ocultamos el input del id
    $("#inmuebleId").attr("hidden", true);
    //Habilitamos los botones
    $("#agregar-img").css("display", "block");
    $("#guardar").css("display", "block");
    $("#cancelar").css("display", "block");
    $("#editar").css("display", "none");
}

//Validaciones
let validacionCampos = $(".datos-propiedad").validate({
    rules: {
        id: {
            required: true
        },
        nombre_inmueble: {
            required: true,
            minlength: 10,
        },
        tipo_inmueble_fk: {
            min: 1
        },
        provincia_fk: {
            min: 1
        },
        direccion_exacta: {
            required: true,
            minlength: 10,
            maxlength: 200
        },
        estado_fk: {
            min: 1
        },
        precio: {
            required: true,
            min: 70000
        },
        cant_habitaciones: {
            required: true
        },
        cant_banios:{
            required: true
        },
        cant_vehiculos:{
            required: true
        },
        codigo_vendedor:{
            required: true
        }
    },
    messages: {
        id: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`
        },
        nombre_inmueble: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`,
            minlength: `<i class="fa-solid fa-circle-exclamation"></i> Debe ingresar más de 10 caracteres`
        },
        tipo_inmueble_fk: {
            min: `<i class="fa-solid fa-circle-exclamation"></i> Debe seleccionar el tipo de inmueble`
        },
        provincia_fk: {
            min: `<i class="fa-solid fa-circle-exclamation"></i> Debe seleccionar la provincia`
        },
        direccion_exacta: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`,
            minlength: `<i class="fa-solid fa-circle-exclamation"></i> Debe ingresar mínimo 10 caracteres`,
            maxlength: `<i class="fa-solid fa-circle-exclamation"></i> Puede ingresar máximo 200 caracteres`
        },
        estado_fk: {
            min: `<i class="fa-solid fa-circle-exclamation"></i> Debe indicar la diponibilidad de la propiedad`
        },
        precio: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`,
            min: `<i class="fa-solid fa-circle-exclamation"></i> Precio mínimo USD $70 000`
        },
        cant_habitaciones: {
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`
        },
        cant_banios:{
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`
        },
        cant_vehiculos:{
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`
        },
        codigo_vendedor:{
            required: `<i class="fa-solid fa-circle-exclamation"></i> Este campo es obligatorio`
        }
    }
});

$("#regresar").click(function (e) {
    e.preventDefault();
    sessionStorage.setItem("idInmueble", null);
    location.href = "CRUD-propiedades.php"
});

$("#editar").click(function (e) {
    // e.preventDefault();
    $("#agregar-img").css("display", "block");
    $("#guardar").css("display", "block");
    $("#cancelar").css("display", "block");
    $("#editar").css("display", "none");
    edicion();
});

$("#cancelar").click(function (e) {
    // e.preventDefault();
    if (OPC == -1) {
        location.href = "CRUD-propiedades.php"
    } else {
        $("#agregar-img").css("display", "none");
        $("#guardar").css("display", "none");
        $("#cancelar").css("display", "none");
        $("#editar").css("display", "block");
        cargarCampos(inmueble);
        deshabilitar();
    }
});

function deshabilitar() {
    //Desabilitamos los inputs para que sea solo lectura
    $("input").attr("disabled", true);
    $("select").attr("disabled", true);
    $("textarea").attr("disabled", true);
    $("#cambiar-vendedor").attr("disabled", true);
    $(".eliminar").attr("disabled", true);
}

function edicion() {
    deshabilitar();
    let hijos = [];
    //almacenar todos los inputs del formulario
    hijos.push($("div").children("input"));
    hijos.push($("div").children("select"));
    hijos.push($("div").children("textarea"));

    // recorremos el arreglo
    hijos.forEach(function (hijo) {
        // recorremos los objetos json
        hijo.each(function () {
            // Obtener el atributo id de cada elemento
            var ids = $(this).attr('id');
            // se habilitan los cambios que sí se pueden modificar
            if (ids != "id" && ids != "codigo_vendedor" && ids != "nombre_completo" && ids != "correo" && ids != "telefono") {
                $(`#${ids}`).attr("disabled", false);
            }
        });
    });
    //Habilitar el boton vendedores y boton eliminar
    $("#cambiar-vendedor").attr("disabled", false);
    $(".eliminar").attr("disabled", false);
}

function habilitar() {
    let campos = $("*[name]");
    // recorremos el arreglo
    for (let i = 0; i < campos.length; i++) {
            $(campos[i]).attr("disabled", false);
    }
}

$("#cambiar-vendedor").click(function (e) {
    e.preventDefault();
    cargarTabla();
});

$("#agregar-vendedor").click(function (e) {
    // e.preventDefault();
    let prueba = $(".nuevo");
    //Validación si ya se encuentra abierto
    if (prueba.length == 0) {
        nuevoVendedor();
        //Ocultar el botón de añadir vendedor
        $("#agregar-vendedor").attr("hidden", true);
    }

});

$("#guardar").click(function (e) {
    e.preventDefault();
    if (validacionCampos.form()) {
        guardar();
    }
    
});

document.querySelector("tbody").addEventListener("click", (e) => {
    //Obtenemos el id del vendedor
    let vendedor = e.target.closest("tr").childNodes[1].innerHTML;

    $.ajax({
        type: "GET",
        url: `http://localhost:8080/buscar-vendedor/${vendedor}`,
        dataType: "JSON",
        success: function (response) {
            //habilitamos los campos
            habilitar();
            //  Obtengo un arreglo de todos los input a llenar por medio de su propiedad name
            let campos = $('#info-vendedor input');
            //Se llenan los campos con los valores obtenidos de la base de datos
            for (let i = 0; i < campos.length; i++) {
                $(campos[i]).val(response[campos[i].name]);
            }
            edicion();
        },
        error: function (er) {
            console.log(er.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
});

$(".modal-body").on("click", "#guardarVendedor", function (e) {
    // e.preventDefault();
    const datos = $(".nuevo").find('input').serialize();
    // console.log(datos);
    $.ajax({
        type: "POST",
        url: `http://localhost:8080/vendedor?${datos}`,
        success: function (response) {

            Swal.fire({
                title: "¡Perfecto!",
                text: "Has creado un nuevo vendedor",
                icon: "success"
            });
            cargarTabla();
            limpiarCamposModal();
        },
        error: function (er) {
            console.log(err.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
});

$(".modal-body").on("click", "#cancelarOpc", function (e) {
    // e.preventDefault();
    $(".nuevo").remove();
    $("#agregar-vendedor").attr("hidden", false);
});

function cargarCampos(inmueble) {
    $.ajax({
        type: "GET",
        url: `http://localhost:8080/inmueble/${inmueble}`,
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

        },
        error: function (er) {
            console.log(er.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
}

function cargarTabla() {

    $.ajax({
        type: "GET",
        url: "http://localhost:8080/vendedores",
        dataType: "JSON",
        success: function (response) {
            // console.log(response);
            let filas = "";
            response.forEach(dato => {
                filas += filasModal(dato)
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

function limpiarCamposModal() {
    let campos = $('.nuevo input');
    for (let i = 0; i < campos.length; i++) {
        $(campos[i]).val("");
    }
}

function filasModal(dato) {
    return `
        <tr>
            <th scope="row">${dato.codigo_vendedor}</th>
            <td>${dato.nombre}</td>
            <td>${dato.apellido1}</td>
            <td>${dato.apellido2}</td>
            <td><button class="btn btn-seleccion"><i class="fa-solid fa-circle-check"></i> Seleccionar</button></td>
        </tr>`;
}

function nuevoVendedor() {
    const entradaDatos = `
                        <div class="row nuevo">
                        <div class="col-12 col-6">
                            <h3 class="text-center">Nuevo Vendedor</h3>
                            <label for="cedula" class="form-label">Cédula</label>
                            <input name="cedula" id="cedula" class="form-control" type="number" required>
                        </div>
                        <div class="col-12 col-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input name="nombre" id="nombre" class="form-control" type="text" required>
                        </div>
                        <div class="col-12 col-6">
                            <label for="apellido1" class="form-label">1° Apellido</label>
                            <input name="apellido1" id="apellido1" class="form-control" type="text" required>
                        </div>
                        <div class="col-12 col-6">
                            <label for="apellido2" class="form-label">2° Apellido</label>
                            <input name="apellido2" id="apellido2" class="form-control" type="text">
                        </div>
                        <div class="col-12 col-6">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input name="correo" id="correo" class="form-control" type="email" required>
                        </div>
                        <div class="col-12 col-6">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input name="telefono" id="telefono" class="form-control" type="number" required>
                        </div>
                        <div class="mb-4 d-block justify-content-center">
                        <button type="submit" id="guardarVendedor" class="btn btn-success">Guardar Cambios</button>
                        <button type="button" id="cancelarOpc" class="btn btn-danger">Cancelar</button>
                        </div>
                    </div>
    `;

    $(".modal-body").prepend(entradaDatos);
}

function guardar() {
    //Habilitamos el campo cedula para añadirlo a la variable datos
    habilitar();
    const datos = $("*[name]").serialize();
    edicion();
    const accion = (OPC == -1) ? "inmueble" : "modificar-inmueble";
    const peticion = (OPC == -1) ? "POST" : "PUT";
    $.ajax({
        type: peticion,
        url: `http://localhost:8080/${accion}?${datos}`,
        success: function (response) {
            if (OPC == -1) {
                Swal.fire({
                    title: "¡Bien!",
                    text: "Has añadido una nueva propiedad",
                    icon: "success"
                });
            } else {
                Swal.fire({
                    title: "Mensaje",
                    text: "Se han modificado los datos de la propiedad",
                    icon: "success"
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
}