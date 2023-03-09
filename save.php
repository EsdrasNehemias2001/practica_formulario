<?php
include('connect.php');

$name = $_POST["name"];
$user = $_POST["user"];
$password = $_POST["password"];

if ($name == "" || $user == "" || $password == "") {
    echo "<h4>Faltaron datos</h4>";
    echo "<a href='registrar.php'>Regresar</a>";
    exit();
}

if ($query = mysqli_query($conn, "INSERT into usuarios (Nombre, Usuario, Password) values ('" . $name . "', '" . $user . "', '" . $password . "')")) {
    echo "<h4>Usuario Registrado</h4>";
    echo "<a href='index.php'>Regresar</a>";
} else {
    echo "Usuario No Registrado";
    echo "<a href='registrar.php'>Regresar</a>";
}
mysqli_close($conn);

?>