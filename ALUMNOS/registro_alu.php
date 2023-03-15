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
    <title>REGISTRO ALUMNOS</title>
</head>
<style>
    .titulo {
        color: white;
        text-decoration: underline;
        text-align: center;
        margin: 50px 10px 0px 10px;
        font-family: 'Times New Roman', Times, serif, Courier, monospace;
    }

    form {
        width: 50%;
        margin: 0 auto;
    }

    .row {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        padding: 10px;
    }

    .btnPrimary {
        border: 1px solid ivory;
        border-radius: 5px;
        padding: 5px 10px;
        color: ivory;
        background-color: blue;
    }

    .btnExit {
        border: 1px solid ivory;
        border-radius: 5px;
        padding: 5px 10px;
        color: ivory;
        background-color: red;
        width: 100%;
        padding: 5px;
        font-size: 16px;
        text-align: center;
    }

    input {
        border: 1px solid gray;
        padding: 5px;
        border-radius: 10px;
    }

    a {
        text-decoration: none;
        color: white;
    }
</style>
<header>
    <h1 class="titulo">REGISTRO DE ALUMNOS</h1>
</header>

<body>
    <form method="POST" action="save_alu.php">
        <section class="formulario">
            <div class="row">
                <label class="nombre">Nombre:</label>
                <input type="text" name="name" placeholder="Ingrese su(s) nombre(s)" />
            </div>
            <div class="row">
                <label class="apellidos">Apellidos:</label>
                <input type="text" name="last_name" placeholder="Ingrese sus apellidos" />
            </div>
            <div class="row">
                <label class="Fecha" for="fecha">Fecha de Nac:</label>
                <input type="text" name="date" placeholder="Ingrese su fecha de nac." />
            </div>
            <div class="row">
                <label class="Telefono" for="fecha">Telefono:</label>
                <input type="text" name="phone" placeholder="Ingrese su telefono" />
            </div>
            <div class="row">
                <label class="correo" for="fecha">Email:</label>
                <input type="email" name="email" placeholder="Ingrese su email" />
            </div>
            <div class="row">
                <button class="btnPrimary" type="submit">Registrar</button>
            </div>
            <div class="row">
                <a class="btnExit" href="tabla_alu.php">Regresar</a>
            </div>
        </section>
    </form>
</body>

</html>