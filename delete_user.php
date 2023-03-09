<?php
include("connect.php");
$user_id = $_POST["user_id"];
if ($user_id <= 0) {
    echo "Usuario no válido<br>";
    echo "<a href='index.php'>Regresar</a>";
    exit();
}
$sql = "DELETE from usuarios where ID = " . $user_id;
$query = mysqli_query($conn, $sql);
if (!$query) {
    echo "Ocurrio un error al borrar el usuario<br>";
    echo "<a href='index.php'>Regresar</a>";
    exit();
}
mysqli_close($conn);
header('Location: index.php');

?>