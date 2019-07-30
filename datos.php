<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/validacion.js" type="text/javascript"></script>
    <title>Registro</title>
</head>
<body>
    <div class="header">Soy un menu</div>
    <div class="regis regisg">
        <form class="registrardatos" method="post" action="registrarse.php">

                <label for="nombres" class="labels">Nombre(s)</label>
                <input type="text" name="nombre" id="nombre"><br>

                <label for="apellidoP" class="labels">Apellido Paterno</label>
                <input type="text" name="apellidop" id="apellidop"><br>
 
                <label for="apellidoM" class="labels">Apellido Materno</label>
                <input type="text" name="apellidom" id="apellidom"><br>

                <label for="rfc" class="labels">RFC</label>
                <input type="text" name="rfc" id="rfc"><br>

                <label for="fecha" class="labels">Fecha de Nacimiento</label>
                <input type="date" name="fechana" id="fechana"><br><br>
        
            <input type="submit" id="continuar" class="continuar" value="Continuar">
        </form>
    </div>
    <div class="footer">
        <p> - 2019</p>
    </div>
</body>
</html>
