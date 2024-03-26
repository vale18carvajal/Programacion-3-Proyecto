$("#nueva-cuenta").click(function (e) { 
    $(".crear-usuario").css("display", "flex");
    $(".formulario-inicio").css("display", "none");
    $("#mensaje").html(`<strong> Nuevo Usuario </strong>`);
});

// $("#politicas").click(function (e) { 
//    e.preventDefault();
//     $("#modal").show();
// });

// $("#cerrar-politicas").click(function (e) { 
//     // e.preventDefault();
//     $("#modal").hide();
//  });