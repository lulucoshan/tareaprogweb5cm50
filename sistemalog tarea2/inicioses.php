<?php
session_start();
if (isset($_SESSION["id"])){
    header("Location: inicio.php");
    exit();
}

if($_COOKIE["session"] === "activa"){
    $_SESSION["id"] = 1;
    $_SESSION["usuario"] = "leonardo";
    setcookie("session", "activa", time() + 60);
    header("Location: inicio.php");
    exit();
}else{
    setcookie("sesion", "", time() - 600);
}
?>

<!DOCTYPE HTML>
<html>
    <header>
        <meta charset="utf-8"/>
    </header>
    <body>
        <h1>bienvenido usuario!</h1><br>
        <div id="campos">
            <form method="POST" action="validar.php"><br>
                <label>usuario</label><br>
                <input type="text" name="usuario" required><br>
                <label>contraseña</label><br>
                <input type="password" name="contrasenia" required><br>
                <input type="checkbox" name="recuerdame">
                <label>recuerdame</label><br>
                <input type="submit" value="iniciar sesión"><br>
            </form>
        </div>
    </body>
</html>