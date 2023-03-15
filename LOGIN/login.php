<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>LOGIN</title>
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
    <h1 class="titulo">LOGIN DE USUARIOS</h1>
</header>
<body>
    <form method="POST" action="auth.php">
        <section class="login">
            <h3>INICIO DE SESION</h3>
            <div class="row">
                <input class ="row2" type="text" name="name" placeholder="Ingrese su usuario"/>
            </div>
            <div class="row">
                <input class ="row2" type="password" name="password" placeholder="Ingrese su contraseña"/>
            </div>
            <div class="row">
                <button class="btnPrimary" type="submit">Iniciar Sesion</button>
            </div>
        </section>
    </form>
</body>
</html>