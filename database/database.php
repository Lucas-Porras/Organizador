<?php
    require_once("credentials.php");
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME); // Aca realizamos la conexion con la base de datos
    if(!$connection){
        echo "Error en la conexion a MySql " . "<br>";
        echo "Error de depuracion: " . mysqli_error() . "<br>";
        echo "Errno de depuracion: " . mysqli_errno() . "<br>";
        exit();
    }

    mysqli_set_charset($connection, "utf8"); // Establece el conjunto de caracteres predeterminado del cliente

?>