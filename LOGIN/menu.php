<?php
session_start();
if (!isset($_SESSION["logged"])) {
    header("Location: ../LOGIN/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>MENU</title>
</head>
<style>
    .titulo{
    color: white;
    text-decoration:underline;
    text-align: center;
    margin: 50px 10px 0px 10px;
    font-family: 'Times New Roman', Times, serif, Courier, monospace;
}
</style>
<header>
    <h1 class="titulo">MENU INICIAL</h1>
</header>
<body>
    <section class="index">
        <h3>SELECCIONE UNA OPCION</h3>
        <p><a class="atajo" href="../USUARIOS/index.php">1. REGISTRO DE USUARIOS</a></p>
        <p><a class="atajo" href="../ALUMNOS/tabla_alu.php">2. REGISTRO DE ALUMNOS</a></p>
        <!--<p><a class="atajo" href="alumnos.html">3. ALUMNOS</a></p>-->
    </section>
</body>
</html>