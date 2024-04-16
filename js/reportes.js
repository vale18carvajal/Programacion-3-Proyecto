$("#btn-generar").on('click', function (e) {

    $("#btn-pdf").css("display", "block");
    $("table").attr("hidden", false);
    $("#mensaje").css("display", "none");
    cargarTabla();


});

function cargarTabla() {
    let disp = $("#disponibilidad").val();
    let prov = $("#provincia").val();
    let tipo = $("#tipo").val();
    $.ajax({
        type: "GET",
        url: `http://localhost:8080/reporte/${disp}/${prov}/${tipo}`,
        dataType: "JSON",
        success: function (response) {
            // console.log(response);
            let filas = "";
            response.forEach(dato => {
                filas += crearFilas(dato)
            });

            $("tbody").html(filas);

            //si no hay registros mostrar mensaje en pantalla
            if (response == "") {
                $("#btn-pdf").css("display", "none");
                $("table").attr("hidden", true);
                $("#mensaje").css("display", "block");
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

function crearFilas(dato) {
    return `
        <tr>
            <th scope="row">${dato.id}</th>
            <td>${dato.descripcion_tipo}</td>
            <td>${dato.nombre_provincia}</td>
            <td>${dato.descripcion_estado}</td>
            <td>${dato.codigo_vendedor}</td>
        </tr>`;
}

$("#btn-pdf").click(function (e) {
    // e.preventDefault();
    let fechaHora = new Date();

    // Obtener la fecha actual
    let fechaActual = fechaHora.toISOString().slice(0, 10);

    // Obtener la hora actual
    let horaActual = fechaHora.toLocaleTimeString();

    // Obtener la fecha y hora actual en un formato personalizado
    let tiempo = `${fechaActual}-${horaActual}`;

    let vista = {
        margin: [20, 10, 20, 10], // Márgenes: arriba, derecha, abajo, izquierda
        filename: `reporte-${tiempo}.pdf`, // Nombre del archivo PDF
    };
    
    //Espera de rendirazión de los elementos dinámicos
    setTimeout(function () {
        let reporte = document.getElementById("reporte");
        html2pdf(reporte, vista);
    }, 1000);
});