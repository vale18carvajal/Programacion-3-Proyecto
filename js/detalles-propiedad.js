deshabilitar();


$("#editar").click(function (e) {
    // e.preventDefault();
    $("#agregar-img").css("display", "block");
    $("#guardar").css("display", "block");
    $("#cancelar").css("display", "block");
    $("#editar").css("display", "none");
    habilitar();
});

$("#cancelar").click(function (e) {
    // e.preventDefault();
    $("#agregar-img").css("display", "none");
    $("#guardar").css("display", "none");
    $("#cancelar").css("display", "none");
    $("#editar").css("display", "block");
    deshabilitar();
});

function deshabilitar(){
    //Desabilitamos los inputs para que sea solo lectura
    $("input").attr("disabled", true);
    $("select").attr("disabled", true);
    $("textarea").attr("disabled", true);
    $("#cambiar-vendedor").attr("disabled", true);
    $(".eliminar").attr("disabled", true);
}

function habilitar(){
    let hijos = [];
    //almacenar todos los inputs del formulario
    hijos.push($("div").children("input"));
    hijos.push($("div").children("select"));
    hijos.push($("div").children("textarea"));

    // recorremos el arreglo
    hijos.forEach(function(hijo) {
        // recorremos los objetos json
        hijo.each(function() {
              // Obtener el atributo id de cada elemento
              var ids = $(this).attr('id');
              // se habilitan los cambios que sí se pueden modificar
              if (ids != "idPropiedad" && ids != "idVendedor" && ids != "nombreVendedor" && ids != "correoVendedor" && ids != "telefonoVendedor"){
                $(`#${ids}`).attr("disabled", false);
              }
          });
    });
    //Habilitar el boton vendedores y boton eliminar
    $("#cambiar-vendedor").attr("disabled", false);
    $(".eliminar").attr("disabled", false);
}

$("#cambiar-vendedor").click(function (e) { 
    e.preventDefault();
    crearModal();
});

$("#agregar-vendedor").click(function (e) { 
    // e.preventDefault();
    let prueba = $(".nuevo");
    //Validación si ya se encuentra abierto
    if (prueba.length == 0) {
        nuevoVendedor();
    }
    
});

$(".modal-body").on("click", "#cancelarOpc", function(e){
    // e.preventDefault();
    $(".nuevo").remove();
});



function crearModal(){
    const infoModal = `
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Ramírez</td>
            <td><button class="btn btn-seleccion"><i class="fa-solid fa-circle-check"></i> Seleccionar</button></td>
        </tr>
        <tr>s
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Jim</td>
            <td><button class="btn btn-seleccion"><i class="fa-solid fa-circle-check"></i> Seleccionar</button></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>Guzmán</td>
            <td>Murillo</td>
            <td><button class="btn btn-seleccion"><i class="fa-solid fa-circle-check"></i> Seleccionar</button></td>
        </tr>`;
    $("tbody").html(infoModal);
}

function nuevoVendedor(){
    const entradaDatos = `
                        <div class="row nuevo">
                        <div class="col-12 col-6">
                            <h3 class="text-center">Nuevo Vendedor</h3>
                            <label for="cedula" class="form-label">Cédula</label>
                            <input name="cedula" id="cedula" class="form-control" type="number">
                        </div>
                        <div class="col-12 col-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input name="nombre" id="nombre" class="form-control" type="text">
                        </div>
                        <div class="col-12 col-6">
                            <label for="apellido1" class="form-label">1° Apellido</label>
                            <input name="apellido1" id="apellido1" class="form-control" type="text">
                        </div>
                        <div class="col-12 col-6">
                            <label for="apellido2" class="form-label">2° Apellido</label>
                            <input name="apellido2" id="apellido2" class="form-control" type="text">
                        </div>
                        <div class="col-12 col-6">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input name="correo" id="apellido2" class="form-control" type="email">
                        </div>
                        <div class="col-12 col-6">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input name="telefono" id="telefono" class="form-control" type="number">
                        </div>
                        <div class="mb-4 d-block justify-content-center">
                        <button type="submit" id="guardarVendedor" class="btn btn-success">Guardar Cambios</button>
                        <button type="button" id="cancelarOpc" class="btn btn-danger">Cancelar</button>
                        </div>
                    </div>
    `;

    $(".modal-body").prepend(entradaDatos);
}


