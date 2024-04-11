


$("#btn-generar").on('click', function (e) { 
    
    $("#btn-pdf").css("display", "block");
    $("table").attr("hidden", false);
    $("#mensaje").css("display", "none");
    cargarTabla();
    
    
});

function cargarTabla() {

    $.ajax({
        type: "GET",
        url: "http://localhost:8080/reporte-general-inmuebles",
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

function crearFilas(dato){
    return `
        <tr>
            <th scope="row">${dato.id}</th>
            <td>${dato.descripcion_tipo}</td>
            <td>${dato.nombre_provincia}</td>
            <td>${dato.descripcion_estado}</td>
            <td>${dato.codigo_vendedor}</td>
        </tr>`;
}