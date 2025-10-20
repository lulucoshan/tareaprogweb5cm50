<?php

session_start();

$baseDeDatosUltraSegura = ["leonardo"=>"password"];
$username = $_POST["usuario"];
$password = $_POST["contrasenia"];

foreach($baseDeDatosUltraSegura as $key => $value){
    if ($username == $key && $password == $value){
        $_SESSION["id"] = 1;
        $_SESSION["usuario"] = $username;

        setcookie("session","activa", time()+60);
        header("Location: inicio.php");
        
    }else{
        echo "usuario o contraseña incorrectos<br>";
        echo '<a href="inicioses.php">regresar</a>';
    }
}
?>