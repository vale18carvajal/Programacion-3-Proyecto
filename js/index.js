cargarCartas();
cargarCarrucel();

$(".propiedades").on("click", ".detalles", function (e) {
    // e.preventDefault();
    // Obtener el elemento padre del botón, que es la carta (div con clase "card")
    let carta = this.closest('.card');
    // Obtener el ID de la carta
    let idCarta = carta.id;

    //Enviamos el id a la ventana de detalle-inmueble por medio de sessionStorage
    sessionStorage.setItem('idCarta', idCarta);
    window.location.href = "detalle-inmueble.php";
});

$(".carousel-inner").on("click", "a", function (e) {
    // e.preventDefault();
    // Obtener el ID de la la propiedad
    let idProp = $(this).closest('.carousel-item').attr('id');

    //Enviamos el id a la ventana de detalle-inmueble por medio de sessionStorage
    sessionStorage.setItem('idCarta', idProp);
    //window.location.href = "detalle-inmueble.php";
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
      <img class="mt-0" src="img/fotos-propiedades/${dato.id}-img1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">${dato.nombre_inmueble}</h5>
        <p class="card-text">${dato.direccion_exacta}</p>
        <button class="btn btn-azul detalles">Ver detalles</button>
      </div>
    </div>
    `;
}

//Propiedades de la sección "te interesa"
function cargarCarrucel() {
    //Obtenener los carousel-items
    let items = $(".carousel-item");

    $.ajax({
        type: "GET",
        url: "http://localhost:8080/inmuebles-aleatorios",
        dataType: "JSON",
        success: function (response) {
            carouselItems = "";
            for (let i = 1; i <= items.length; i++) {
                let active= "";
                if (i == 1) {
                    active= "active";
                }
                carouselItems += `
                <div id="${response[i-1].id}" class="carousel-item ${active}">
                <img src="img/fotos-propiedades/${response[i-1].id}-img1.jpg" class="d-block w-100" alt="Foto de la propiedad">
                <div class="carousel-caption d-none d-md-block">
                <h5>${response[i-1].nombre_inmueble}</h5>
                <a href="detalle-inmueble.php">Ver detalles</a>
          </div>
        </div>
                `;
            }
            $(".carousel-inner").html(carouselItems);
        },
        error: function (er) {
            console.log(err.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
}