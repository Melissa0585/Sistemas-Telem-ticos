<?php

// Parametros a configurar para la conexion de la base de datos
        $host = "140.84.170.238";    // sera el valor de nuestra BD
        $basededatos = "admin_default";    // sera el valor de nuestra BD
        $usuariodb = "admin_sayets";    // sera el valor de nuestra BD
        $clavedb = "pulseras";    // sera el valor de nuestra BD

        $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

        if ($conexion->connect_errno) {
            echo "Nuestro sitio experimenta fallos....";
            exit();
        }




?>