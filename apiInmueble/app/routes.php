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


    //CRUD USUARIO
    //Agregar usuario
    $app->post('/usuario', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();

        //Obtener el registro del formulario de modo de arreglo asociativo
        $rec = $request->getQueryParams();

        //Almacenar los datos datos del formulario a la tabla
        $res = $db->AutoExecute("usuario", $rec, "INSERT");

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
        $sql = "SELECT u.nombre_usuario, u.correo, r.descripcion_usuario, u.foto_perfil, u.bloqueado, u.fecha_creacion 
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
        $sql = "SELECT u.cedula, u.nombre, u.apellido1, u.apellido2, u.fecha_nacimiento, u.correo, u.telefono, u.nombre_usuario, 
                u.foto_perfil, r.descripcion_usuario, u.bloqueado
                FROM usuario u
                JOIN rol_usuario r ON r.codigo_usuario = u.rol_fk
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
        $response->getBody()->write("Se busca el vendedor: $idVendedor");
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
    //Busar inmuebles
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

    //Buscar inmuebles por id
    $app->get('/inmueble/{idInmueble}', function (Request $request, Response $response, array $args) {
        $idInmueble = $args["idInmueble"];
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT i.id, i.nombre_inmueble, t.descripcion_tipo, p.nombre_provincia, i.direccion_exacta, 
        e.descripcion_estado, i.precio, i.cant_habitaciones, i.cant_banios, i.cant_vehiculos, i.codigo_vendedor, 
        CONCAT(v.nombre,' ', v.apellido1, ' ', v.apellido2) AS nombre_completo, v.correo, v.telefono
        FROM inmueble i
        JOIN tipo_inmueble t ON t.codigo_tipo = i.tipo_inmueble_fk
        JOIN provincia p ON p.codigo_provincia = i.provincia_fk
        JOIN estado e ON e.codigo_estado = i.estado_fk
        JOIN vendedor v ON v.codigo_vendedor = i.codigo_vendedor
        WHERE i.id='$idInmueble'";

        //Ejecutar la consulta en modo fetch
        $res = $db->GetAll($sql);

        $response->getBody()->write(json_encode($res[0]));
        return $response;
    });

    //Reporte general
    $app->get('/reporte-general-inmuebles', function (Request $request, Response $response) {
        //Realizar conexion
        $db = conectar();

        //Cambiar a modo fetch
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //Consula sql
        $sql = "SELECT i.id, t.descripcion_tipo, p.nombre_provincia, e.descripcion_estado, i.codigo_vendedor 
        FROM inmueble i
        JOIN provincia p ON p.codigo_provincia = i.provincia_fk
        JOIN tipo_inmueble t ON t.codigo_tipo = i.tipo_inmueble_fk
        JOIN estado e ON e.codigo_estado = i.estado_fk";

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
