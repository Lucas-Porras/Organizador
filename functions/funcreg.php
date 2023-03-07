<?php

require_once("database/session.php");

$errorPwddontMatch= "<script>alert('Las contrase;as no coinciden')</script>";

if(isset($_SESSION['usuario'])){
    echo "<script> alert('Ya estas logueado'); </script>";
    header('Location: index.php');
} // En caso de estar logueado, lo devolveremos al index o a la pagina principal

// Comenzamos a programar el registro
// Comenzamos preguntando si existe el submit
if(isset($_POST['register'])){
    // Preguntamos que si no esta vacio los post de los inputs que haga lo siguiente
    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['pwd']) ){ // falta la PFP
        $consReg = "INSERT INTO users (first_name, last_name, username, email, pwd) VALUES ('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['username']."','".$_POST['email']."','".$_POST['pwd']."')"; // Falta pfp
        if($_POST['pwd'] == $_POST['confpwd']){
            $queryReg = mysqli_query($connection, $consReg);
        }
        else{
            echo $errorPwddontMatch;
        }
    }
    else{

    }
}


?>