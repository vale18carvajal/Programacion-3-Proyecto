let inmueble_ = sessionStorage.getItem("idCarta");
cargarDatos(inmueble_);


function cargarDatos(inmueble) {
    $.ajax({
        type: "GET",
        url: `http://localhost:8080/inmueble/${inmueble}`,
        dataType: "JSON",
        success: function (response) {
            cargarImagenes(response);
            $("#nombre_inmueble span").html(response.nombre_inmueble);
            $("#direccion_exacta span").html(response.direccion_exacta);
            $("#precio span").html(response.precio);
            $("#cant_habitaciones span").html(response.cant_habitaciones);
            $("#cant_banios span").html(response.cant_banios);
            $("#cant_vehiculos span").html(response.cant_vehiculos);
            cargarVendedor(response.codigo_vendedor);
            generarQR();
        },
        error: function (er) {
            console.log(er.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });
}

function cargarVendedor(id) {
    $.ajax({
        type: "GET",
        url: `http://localhost:8080/buscar-vendedor/${id}`,
        dataType: "JSON",
        success: function (response) {
            $("#nombre_completo span").html(response.nombre_completo);
            $("#telefono span").html(response.telefono);
            $("#correo span").html(response.correo);
            $("#whatsapp").attr("href", `https://wa.me/506${response.telefono}`);
        },
        error: function (er) {
            console.log(er.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }

    });
}

function cargarImagenes(datos){
    $("#foto1").attr("src", `img/fotos-propiedades/${datos.id}-img1.jpg`);
    $("#foto2").attr("src", `img/fotos-propiedades/${datos.id}-img2.jpg`);
    $("#foto3").attr("src", `img/fotos-propiedades/${datos.id}-img3.jpg`);
}

//Generar el código QR
function generarQR(){
     new QRCode(document.getElementById("qr"), {
        text: "http://localhost/Programacion-3-Proyecto/detalle-inmueble.php",
        colorDark : "#0D518C",
        colorLight : "#F1F1F4",
        correctLevel : QRCode.CorrectLevel.H
    });
}