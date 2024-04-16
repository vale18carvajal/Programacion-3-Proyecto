let tipo = "";
let rango = "";
let provincia = "";

if (sessionStorage.getItem("busqueda") !== null) {
    //Obtengo los filtros del index en un objeto JSON
    let filtros = JSON.parse(sessionStorage.getItem("busqueda"));

    //Aignamos los filtros de búsqueda
    tipo = filtros.tipo;
    rango = filtros.rango;
    provincia = filtros.provincia;
    cargarCartas();

    //Reiniciamos la variable eliminándola
    sessionStorage.removeItem("busqueda");

} else {
    tipo = $("#tipo").val();
    rango = $("#rango").val();
    provincia = $("#provincia").val();
    cargarCartas();
}

$(document).on("click", ".detalles", function (e) {
    // e.preventDefault();
    // Obtener el elemento padre del botón, que es la carta (div con clase "card")
    var carta = this.closest('.card');

    // Obtener el ID de la carta
    var idCarta = carta.id;
    // Mostrar el ID en la consola
    // console.log("ID de la carta:", idCarta);

    sessionStorage.setItem('idCarta', idCarta);
    window.location.href = "detalle-inmueble.php";
});

$("#filtrar").click(function (e) {
    e.preventDefault();
    tipo = $("#tipo").val();
    rango = $("#rango").val();
    provincia = $("#provincia").val();
    cargarCartas();
});


function cargarCartas() {


    $.ajax({
        type: "GET",
        url: `http://localhost:8080/inmueble-dis/${tipo}/${rango}/${provincia}`,
        dataType: "JSON",
        success: function (response) {
            // console.log(response);
            let cartas = "";
            response.forEach(dato => {
                cartas += crearCartas(dato)
            });

            $(".formulariop").html(cartas);
        },
        error: function (er) {
            console.log(err.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
}


function crearCartas(dato) {
    return `
    <div id="${dato.id}" class="card col-md-4 col-lg-3 col-sm-12" style="width: 18rem;">
      <img class="mt-0" src="img/fotos-propiedades/${dato.id}-img1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">${dato.nombre_inmueble}</h5>
        <p class="card-text">${dato.direccion_exacta}</p>
        <button class="btn btn-azul detalles">Ver detalles</button>
      </div>
    </div>
    `;
}