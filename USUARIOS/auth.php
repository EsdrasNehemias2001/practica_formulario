<?php
    session_start();
    include ('../LOGIN/connect.php');
    $user = $_POST["name"];
    $password = $_POST["password"];    
    $password = md5($password."cursophp");

    $sql = "SELECT * FROM usuarios where Usuario='".$user."' && Password='".$password."'";
    
    $query = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_object($query)){
        
        $_SESSION["logged"] = true;
        $_SESSION["user_id"]  = $row->ID;
        $_SESSION["displayName"] = $row->Nombre;
        $_SESSION["user"] = $row->Usuario;
        $_SESSION["pass"] = $row->Password;

        header("Location: index.php");
    }
    else{
        echo "Datos no válidos<br>";
        echo "<a href='../LOGIN/login.php'>Regresar</a>";
    }
?>