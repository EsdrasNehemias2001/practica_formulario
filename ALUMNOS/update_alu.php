<?php
    include ('../LOGIN/connect.php');
    $alu_id = $_POST["alu_id"];
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $date = $_POST["date"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $sql = "UPDATE alumnos set 
    Nombre = '".$name."', Apellidos='".$last_name."', Fecha_Nac='".$date."', Telefono='".$phone."', Correo='".$email."' where ID=".$alu_id;
    if ($query = mysqli_query($conn, $sql))
        header("Location: tabla_alu.php");
    else{
        echo "Usuario no pudo ser actualizado<br>";
        echo "<a href='tabla_alu.php'>Regresar</a>";
    }
?>