$("#nueva-cuenta").click(function (e) { 
    $(".crear-usuario").css("display", "flex");
    $(".formulario-inicio").css("display", "none");
    $("#mensaje").html(`<strong> Nuevo Usuario </strong>`);
});