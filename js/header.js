let username = "";

if (sessionStorage.length != 0) {
    username = sessionStorage.getItem("activo");
    //actualización de imagen de perfil en el header
    cargarImagen(username);
}

function cargarImagen(username) {
    $.ajax({
        type: "GET",
        url: `http://localhost:8080/buscar-usuario/${username}`,
        dataType: "JSON",
        success: function (response) {
            $(".nav-link img").attr("src", `img/${response.foto_perfil}`);
        },
        error: function (er) {
            console.log(er.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });

}