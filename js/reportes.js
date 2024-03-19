$("#btn-generar").click(function (e) { 
    
    $("#btn-pdf").css("display", "block");
    $("table").css("display", "auto");
    $("#mensaje").css("display", "none");


    // Pendiente hacer la variable info dinámicamente
    let info = `
    <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">PROVINCIA</th>
                    <th scope="col">DISPONIBILIDAD</th>
                    <th scope="col">COD. VENDEDOR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Apartamento</td>
                    <td>San José</td>
                    <td>No disponible</td>
                    <td>23472</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Casa</td>
                    <td>Guanacaste</td>
                    <td>Disponible</td>
                    <td>84745</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Terreno</td>
                    <td>Cartago</td>
                    <td>Disponible</td>
                    <td>57923</td>
                </tr>
            </tbody>`;

    $("table").html(info);
    
});