$(".detalles").click(function (e) { 
    // e.preventDefault();
    // Obtener el elemento padre del botón, que es la carta (div con clase "card")
    var carta = this.closest('.card');
    
    // Obtener el ID de la carta
    var idCarta = carta.id;
    // Mostrar el ID en la consola
    console.log("ID de la carta:", idCarta);
});