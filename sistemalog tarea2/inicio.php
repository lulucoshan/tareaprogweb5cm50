<?php
session_start();
if (!isset($_SESSION["id"])){
    header("Location: inicioses.php");
    exit();
}


?>

<!DOCTYPE HTML>
<html>
    <header>
        <meta charset="utf-8"/>
    </header>
    <h1>sesion iniciada exitosamente</h1>
    <form method="post" action="cerrarsesion.php">
        <input type="submit" value="cerrar sesión">
    </form>
</html>