<?php
    include "../vendor/adodb/adodb-php/adodb.inc.php";

    function conectar(){
        //Llamar driver de MySQL
        $conector = NewADOConnection('mysql');

        //Crear credenciales
        $host = "localhost";
        $user  = "root";
        $pass = "mysql";
        $bd = "vende_tu_inmueble";

        //Hacer la conexión con la base de datos
        $conector->Connect($host,$user,$pass,$bd);

        return $conector;
        }
?>