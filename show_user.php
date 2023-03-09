<?php
session_start();
if (!isset($_SESSION["logged"])) {
    header("Location: login.php");
}

include("connect.php");
$user_id = $_POST["user_id"];
$sql = "SELECT * from usuarios where ID=" . $user_id;
$query = mysqli_query($conn, $sql);
if (!$row = mysqli_fetch_object($query)) {
    echo "Usuario no existe<br>";
    echo "<a href='index.php'>Regresar</a>";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>EDITAR</title>
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

    input {
        border: 1px solid gray;
        padding: 5px;
        border-radius: 10px;
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
</style>
<header>
    <h1 class="titulo">EDITAR DATOS DE USUARIO</h1>
</header>

<body>
    <form method="POST" action="update_user.php">
        <section class="formulario">

            <input type="hidden" name="user_id" value="<?php echo $row->ID ?>">
            <div class="row">
                <label class="Nombre">Nombre:</label>
                <input type="text" name="name" value="<?php echo $row->Nombre ?>" />
            </div>
            <div class="row">
                <label>Usuario:</label>
                <input type="text" name="user" value="<?php echo $row->Usuario ?>" />
            </div>
            <div class="row">
                <label>Password:</label>
                <input type="password" name="password" value="<?php echo $row->Password ?>" />
            </div>
            <div class="row">
                <button class="btnPrimary" type="submit">Actualizar</button>
            </div>
            <div class="row">
                <a class="btnExit" href="index.php">Regresar</a>
            </div>
        </section>
    </form>
</body>

</html>