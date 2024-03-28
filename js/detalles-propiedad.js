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
    //Ocultar boton vendedores
    $("#cambiar-vendedor").css("display", "none");
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
              if (ids != "idPropiedad" && ids != "nombreVendedor" && ids != "correoVendedor" && ids != "telefonoVendedor"){
                $(`#${ids}`).attr("disabled", false);
              }
          });
    });
    //Habilitar el boton vendedores
    $("#cambiar-vendedor").css("display", "inline-block");
}

$("#cambiar-vendedor").click(function (e) { 
    e.preventDefault();
    crearModal();
});

function crearModal(){
    const infoModal = `
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Ramírez</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>s
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Jim</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>Guzmán</td>
            <td>Murillo</td>
            <td><input type="checkbox"></td>
        </tr>`;
    $("tbody").html(infoModal);
}
