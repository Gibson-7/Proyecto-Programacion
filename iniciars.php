<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="header">Soy un menu</div>
    <div class="logo">Logo</div>
    <div class="uspa">
        <form id="usuarcon" class="usuarcon" action="db/usuarios/proceso.php" method="post">
            <input type="text" id="usuario" class="usuario" name="usr" placeholder="Usuario"><br>
            <input type="password" id="password" class="password" name="pass" placeholder="Contraseña"><br>
            <button id="ingresar" class="ingresar">Ingresar</button>
        </form>
    </div>
    <div class="footer">
        <p> - 2019</p>
    </div>
</body>
</html>