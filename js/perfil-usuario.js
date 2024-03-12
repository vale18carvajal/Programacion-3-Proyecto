$("#actualizar").click(function (e) {
    //Abrir campos para editar datos
    $("input").attr("disabled", false);
    $("#cedula").attr("disabled", true);
    $("#cancelar").css("display", "inline");
    $("#confirmar").css("display", "inline");
    $("#actualizar").css("display", "none");
});

$("#cancelar").click(function (e) {
    //reestablecer campos desabilitados y botones
    $("input").attr("disabled", true);
    $("#cancelar").css("display", "none");
    $("#confirmar").css("display", "none");
    $("#actualizar").css("display", "inline");

    //PENDIENTE VOLVER A LLAMAR LOS DATOS DE LA BASE DE DATOS POR SI HA OCURRIDO ALGUN CAMBIO SIN GUARDAR
});

