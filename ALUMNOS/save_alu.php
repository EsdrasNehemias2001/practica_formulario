<?php
include('../LOGIN/connect.php');

$name = $_POST["name"];
$last_name = $_POST["last_name"];
$date = $_POST["date"];
$phone = $_POST["phone"];
$email = $_POST["email"];

if ($name == "" || $last_name == "" || $date == "" || $phone == "" || $email == "") {
    /*echo "<h4>Faltaron datos</h4>";
    echo "<a href='registrar.php'>Regresar</a>";*/
    echo "<script>alert('Faltaron datos');window.location='registro_alu.php'</script>";
    exit();
}

if ($query = mysqli_query($conn, "INSERT into alumnos (Nombre, Apellidos, Fecha_Nac, Telefono, Correo) values ('" . $name . "', '" . $last_name . "', '" . $date . "', '" . $phone . "', '" . $email . "')")) {
    /*echo "<h4>Usuario Registrado</h4>";
    echo "<a href='index.php'>Regresar</a>";*/
    echo "<script>alert('Alumno Registrado: $name');window.location='tabla_alu.php'</script>";
} else {
    /*echo "Usuario No Registrado";
    echo "<a href='registrar.php'>Regresar</a>";*/
    echo "<script>alert('Usuario No Registrado');window.location='tabla_alu.php'</script>";
}
mysqli_close($conn);

?>