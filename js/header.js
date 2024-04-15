let username = "";

if (sessionStorage.getItem("activo") !== null) {
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
            //Mostrar el acceso al perfil
            $(".icono a").attr("hidden", false);
            //Validacion si el usuario posee foto o no
            if (response.foto_perfil == 0) {
                $(".nav-link img").attr("src", `img/foto-predeterminada.webp`);
            } else {
                $(".nav-link img").attr("src", `img/fotos-usuarios/${response.cedula}.jpg`);
            }
            //Quitar el acceso de inicio de sesión
            $("#perfilUsuario").attr("hidden", true);
        },
        error: function (er) {
            console.log(er.statusText + er.responseText);
        },
        complete: function () {
            console.log("Terminado");
        }
    });

}