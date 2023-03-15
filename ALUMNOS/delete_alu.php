<?php
include("../LOGIN/connect.php");
$alu_id = $_POST["alu_id"];
if ($alu_id <= 0) {
    echo "Usuario no válido<br>";
    echo "<a href='tabla_alu.php'>Regresar</a>";
    exit();
}
$sql = "DELETE from alumnos where ID = " . $alu_id;
$query = mysqli_query($conn, $sql);
if (!$query) {
    echo "Ocurrio un error al borrar el usuario<br>";
    echo "<a href='tabla_alu.php'>Regresar</a>";
    exit();
}
mysqli_close($conn);
header('Location: tabla_alu.php');

?>