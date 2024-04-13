cargarCartas();


$(".propiedades").on("click",".detalles",function (e) {
    // e.preventDefault();
    // Obtener el elemento padre del botón, que es la carta (div con clase "card")
    var carta = this.closest('.card');
    // Obtener el ID de la carta
    var idCarta = carta.id;

    //Enviamos el id a la ventana de detalle-inmueble por medio de sessionStorage
    sessionStorage.setItem('idCarta', idCarta);
    window.location.href = "detalle-inmueble.php";
});

function cargarCartas() {
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/inmuebles-index",
        dataType: "JSON",
        success: function (response) {
            // console.log(response);
            let cartas = `<h3>Nuestras Propiedades</h3>`;
            response.forEach(dato => {
                cartas += crearCartas(dato)
            });

            $(".propiedades").html(cartas);
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
      <img class="mt-0" src="https://hips.hearstapps.com/hmg-prod/images/casa-reformada-decorada-elegante-colores-neutros-tonos-pastel-salon-cocina-abierta-molduras-1669197336.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">${dato.nombre_inmueble}</h5>
        <p class="card-text">${dato.direccion_exacta}</p>
        <button class="btn btn-azul detalles">Ver detalles</button>
      </div>
    </div>
    `;
}