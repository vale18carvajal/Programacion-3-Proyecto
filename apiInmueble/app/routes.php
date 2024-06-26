<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

//importar la conexion de la base de datos
include "../public/conexion.php";

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    //INCIO DE SESIÓN
    $app->get('/iniciarSesion/{username}/{pass}', function (Request $request, Response $response, array $args) {
        $username = $args["username"];
        $pass = $args["pass"];
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT nombre_usuario, clave
                FROM usuario
                WHERE nombre_usuario='$username'";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        //Validacion de usuario y contraseña correctos
        if (!empty($res) && $res[0]['nombre_usuario'] == $username && $res[0]['clave'] == $pass) {
            $response->getBody()->write("1");
        } else {
            $response->getBody()->write("0");
        }
        return $response;
    });

    //CRUD USUARIO
    //Agregar usuario
    $app->post('/usuario', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();

        //Obtener el registro del formulario de modo de arreglo asociativo
        $rec = $request->getQueryParams();

        //Almacenar los datos datos del formulario a la tabla
        $res = $db->AutoExecute("usuario", $rec, "INSERT");


        //validacion si se sube un archivo
        if (isset($_FILES['imagen']['tmp_name']) && file_exists($_FILES['imagen']['tmp_name'])) {
            //obtener el ultima cedula insertada
            $idInsertado = $db->insert_Id('usuario', 'cedula');
            //mover el archivo a la carpeta deseada
            $nomArchivo = "../../img/fotos-usuarios/$idInsertado.jpg";
            //mover el archivo
            move_uploaded_file($_FILES['imagen']['tmp_name'], $nomArchivo);

            //Indicamos que el usuario sí tiene foto y lo alamacenamos en la bd
            $foto["foto_perfil"] = 1;
            $res = $db->AutoExecute("usuario", $foto, "UPDATE", "cedula=$rec[cedula]");
        }

        $response->getBody()->write(strval($res));
        return $response;
    });
    //Modificar datos usuario
    $app->put('/modificar-usuario', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();

        //Obtener el registro del formulario de modo de arreglo asociativo
        $rec = $request->getQueryParams();

        //Almacenar los datos datos del formulario a la tabla persona con el filtrado where
        $res = $db->AutoExecute("usuario", $rec, "UPDATE", "cedula=$rec[cedula]");

        //validacion si se sube un archivo
        if (isset($_FILES['imagen']['tmp_name']) && file_exists($_FILES['imagen']['tmp_name'])) {
            //obtener la cedula
            $idInsertado = "$rec[cedula]";
            //mover el archivo a la carpeta deseada
            $nomArchivo = "../../img/fotos-usuarios/$idInsertado.jpg";
            //mover el archivo
            move_uploaded_file($_FILES['imagen']['tmp_name'], $nomArchivo);

            //Indicamos que el usuario sí tiene foto y lo alamacenamos en la bd
            $foto["foto_perfil"] = 1;
            $res = $db->AutoExecute("usuario", $foto, "UPDATE", "cedula=$rec[cedula]");

            $response->getBody()->write(strval($res));
            return $response;
        }
        $response->getBody()->write(strval($res));
        return $response;
    });

    //Eliminar usuario
    $app->delete('/eliminar-usuario/{username}', function (Request $request, Response $response, array $args) {
        $username = $args["username"];

        //Realizar conexion
        $db = conectar();

        //Realizar la consulta
        $sql = "DELETE FROM usuario WHERE nombre_usuario='$username'";

        //Ejecutar la consulta que retorna un objeto ADORecordSet_array
        $res = $db->Execute($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });
    //Busar usuarios
    $app->get('/usuarios', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT u.cedula, u.nombre_usuario, u.correo, r.descripcion_usuario, u.foto_perfil, u.bloqueado, u.fecha_creacion 
        FROM usuario u
        JOIN rol_usuario r ON r.codigo_usuario = u.rol_fk";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });

    //Buscar usuarios por nombre de usuario
    $app->get('/buscar-usuario/{username}', function (Request $request, Response $response, array $args) {
        $usuario = $args["username"];
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT u.cedula, u.nombre, u.apellido1, u.apellido2, u.fecha_nacimiento, u.clave, u.correo, u.telefono, u.nombre_usuario, 
                u.foto_perfil, u.rol_fk, u.bloqueado
                FROM usuario u
                WHERE u.nombre_usuario='$usuario'";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res[0]));
        return $response;
    });

    //CRUD VENDEDOR
    //Agregar vendedor
    $app->post('/vendedor', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();

        //Obtener el registro del formulario de modo de arreglo asociativo
        $rec = $request->getQueryParams();

        //Almacenar los datos datos del formulario a la tabla
        $res = $db->AutoExecute("vendedor", $rec, "INSERT");

        $response->getBody()->write(strval($res));
        return $response;
    });
    //Modificar datos vendedor
    $app->put('/modificar-vendedor', function (Request $request, Response $response, array $args) {
        //Realizar conexion
        $db = conectar();

        //Obtener el registro del formulario de modo de arreglo asociativo
        $rec = $request->getQueryParams();

        //Almacenar los datos datos del formulario a la tabla persona con el filtrado where
        $res = $db->AutoExecute("vendedor", $rec, "UPDATE", "codigo_vendedor=$rec[codigo_vendedor]");

        $response->getBody()->write(strval($res));
        return $response;
    });

    //Eliminar vendedor
    $app->delete('/eliminar-vendedor/{idVendedor}', function (Request $request, Response $response, array $args) {
        $idVendedor = $args["idVendedor"];

        //Realizar conexion
        $db = conectar();

        //Realizar la consulta
        $sql = "DELETE FROM vendedor WHERE codigo_vendedor='$idVendedor'";

        //Ejecutar la consulta que retorna un objeto ADORecordSet_array
        $res = $db->Execute($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });
    //Busar vendedores
    $app->get('/vendedores', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT codigo_vendedor, nombre, apellido1, apellido2
        FROM vendedor";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });

    //Buscar vendedores por nombres o apellidos
    $app->get('/buscar-vendedor/{idVendedor}', function (Request $request, Response $response, array $args) {
        $idVendedor = $args["idVendedor"];
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT codigo_vendedor, CONCAT(nombre,' ',apellido1, ' ',apellido2) AS nombre_completo, correo, telefono
        FROM vendedor
        WHERE codigo_vendedor='$idVendedor'";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res[0]));
        return $response;
    });

    //CRUD INMUEBLE
    //Agregar inmueble
    $app->post('/inmueble', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();

        //Obtener el registro del formulario de modo de arreglo asociativo
        $rec = $request->getQueryParams();

        //Almacenar los datos datos del formulario a la tabla
        $res = $db->AutoExecute("inmueble", $rec, "INSERT");



        //obtener el ultima cedula insertada
        $idInsertado = $db->insert_Id('inmueble', 'id');

        //mover el archivo a la carpeta deseada
        $nomArchivo = "../../img/fotos-propiedades/$idInsertado-img1.jpg";
        //mover el archivos
        move_uploaded_file($_FILES['imagen1']['tmp_name'], $nomArchivo);

        $nomArchivo = "../../img/fotos-propiedades/$idInsertado-img2.jpg";
        move_uploaded_file($_FILES['imagen2']['tmp_name'], $nomArchivo);

        $nomArchivo = "../../img/fotos-propiedades/$idInsertado-img3.jpg";
        move_uploaded_file($_FILES['imagen3']['tmp_name'], $nomArchivo);


        $response->getBody()->write(strval($res));
        return $response;
    });
    //Modificar datos inmueble
    $app->put('/modificar-inmueble', function (Request $request, Response $response, array $args) {
        //Realizar conexion
        $db = conectar();

        //Obtener el registro del formulario de modo de arreglo asociativo
        $rec = $request->getQueryParams();

        //Almacenar los datos datos del formulario a la tabla persona con el filtrado where
        $res = $db->AutoExecute("inmueble", $rec, "UPDATE", "id=$rec[id]");

        $response->getBody()->write(strval($res));
        return $response;
    });

    //Eliminar inmueble
    $app->delete('/eliminar-inmueble/{idInmueble}', function (Request $request, Response $response, array $args) {
        $idInmueble = $args["idInmueble"];

        //Realizar conexion
        $db = conectar();

        //Realizar la consulta
        $sql = "DELETE FROM inmueble WHERE id='$idInmueble'";

        //Ejecutar la consulta que retorna un objeto ADORecordSet_array
        $res = $db->Execute($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });
    //Obtener todos los inmuebles / usuario admin
    $app->get('/inmuebles', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT i.id, i.nombre_inmueble, e.descripcion_estado, i.codigo_vendedor 
        FROM inmueble i
        JOIN estado e ON e.codigo_estado = i.estado_fk";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });

    //Obtener los inmuebles de un usuario
    $app->get('/inmuebles-usuario/{usuario}', function (Request $request, Response $response, array $args) {
        $usuario = $args["usuario"];
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT i.id, i.nombre_inmueble, e.descripcion_estado, i.codigo_vendedor 
        FROM inmueble i
        JOIN estado e ON e.codigo_estado = i.estado_fk
        WHERE autor = '$usuario'";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });

    //Busar inmuebles por filtros
    $app->get('/inmuebledis', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();
        $queryParams = $request->getQueryParams();

        $tipoInmueble = $queryParams["tipoInmueble"] ?? "";
        $ubicacion = $queryParams["ubicacion"] ?? "";
        $precio = $queryParams["precio"] ?? "";

        $precioMin = null;
        $precioMax = null;

        switch ($precio) {
            case "70-195":
                $precioMin = 70000;
                $precioMax = 195000;
                break;
            case "195-395":
                $precioMin = 195000;
                $precioMax = 395000;
                break;
            case "395+":
                $precioMin = 395000;
                $precioMax = 99999999999999;
                break;
            default:
                $precioMin = -1;
                $precioMax = 999999999;
                break;
        };

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT i.id, i.nombre_inmueble, e.descripcion_estado, i.codigo_vendedor, i.direccion_exacta
            FROM inmueble i
            JOIN estado e ON e.codigo_estado = i.estado_fk
            JOIN tipo_inmueble ti ON ti.codigo_tipo = i.tipo_inmueble_fk
            JOIN provincia p ON p.codigo_provincia = i.provincia_fk
            WHERE (upper(ti.descripcion_tipo) = upper('{$tipoInmueble}') OR '{$tipoInmueble}' = '')
                AND (upper(p.nombre_provincia) = upper('{$ubicacion}') OR '{$ubicacion}' = '')
                AND (i.precio >= {$precioMin} AND i.precio < {$precioMax})
                AND i.estado_fk = 1 -- Estado DISPONIBLE
            ";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response->withHeader('Content-Type', 'application/json');
    });


    //Buscar inmuebles por id
    $app->get('/inmueble/{idInmueble}', function (Request $request, Response $response, array $args) {
        $idInmueble = $args["idInmueble"];
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT i.id, i.nombre_inmueble, i.tipo_inmueble_fk, i.provincia_fk, i.direccion_exacta, 
        i.estado_fk, i.precio, i.cant_habitaciones, i.cant_banios, i.cant_vehiculos, i.codigo_vendedor, 
        CONCAT(v.nombre,' ', v.apellido1, ' ', v.apellido2) AS nombre_completo, v.correo, v.telefono
        FROM inmueble i
        JOIN vendedor v ON v.codigo_vendedor = i.codigo_vendedor
        WHERE i.id='$idInmueble'";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res[0]));
        return $response;
    });

    //ULTIMAS 10 PROPIEDADES PARA INDEX
    $app->get('/inmuebles-index', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT id, nombre_inmueble, direccion_exacta 
        FROM inmueble 
        WHERE estado_fk = '1'
        ORDER BY id DESC
        LIMIT 10";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });

    $app->get('/inmuebles-aleatorios', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT id, nombre_inmueble
        FROM inmueble 
        WHERE estado_fk = '1'
        ORDER BY RAND()
        LIMIT 3;";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });


    //Reporte
    $app->get('/reporte/{disp}/{prov}/{tipo}', function (Request $request, Response $response, array $args) {
        //Parámentros
        $disponible = $args["disp"];
        $provincia = $args["prov"];
        $tipo = $args["tipo"];

        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT i.id, t.descripcion_tipo, p.nombre_provincia, e.descripcion_estado, i.codigo_vendedor 
        FROM inmueble i
        JOIN provincia p ON p.codigo_provincia = i.provincia_fk
        JOIN tipo_inmueble t ON t.codigo_tipo = i.tipo_inmueble_fk
        JOIN estado e ON e.codigo_estado = i.estado_fk
        WHERE 1";

        if ($disponible !== "0") {
            $sql .= " AND estado_fk = '$disponible'";
        }

        if ($provincia !== "0") {
            $sql .= " AND provincia_fk = '$provincia'";
        }

        if ($tipo !== "0") {
            $sql .= " AND tipo_inmueble_fk = '$tipo'";
        }

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });
    //Busar inmuebles por filtros
    $app->get('/inmueble-dis/{tipo}/{precio}/{ubi}', function (Request $request, Response $response, array $args) {
        //Parámentros
        $tipo = $args["tipo"];
        $precio = $args["precio"];
        $ubi = $args["ubi"];

        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Rango de precios
        switch ($precio) {
            case 1:
                $precioMin = 70000;
                $precioMax = 195000;
                break;
            case 2:
                $precioMin = 195000;
                $precioMax = 395000;
                break;
            case 3:
                $precioMin = 395000;
                $precioMax = 99999999999999;
                break;
        };

        //Consula sql
        $sql = "SELECT id, nombre_inmueble, direccion_exacta
      FROM inmueble 
      WHERE estado_fk = 1";

        if ($tipo != 0) {
            $sql .= " AND tipo_inmueble_fk = '$tipo'";
        }

        if ($precio != 0) {
            $sql .= " AND (precio >= $precioMin AND precio < $precioMax)";
        }

        if ($ubi != 0) {
            $sql .= " AND provincia_fk = '$ubi'";
        }

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
