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
    <div class="regis regisp">
        <form id="registrar" class="registrar" method="post" action="completo.php">
    <label for="usuario" class="labels">Usuario</label>
    <input type="text" name="usuario" id="usuario" class="usuario"> <br>

    <label for="password" class="labels">Contraseña</label>
    <input type="password" name="pss" id="pss" class="pss"> <br>

    <label for="pass_validado" class="labels">Validar contraseña</label>
    <input type="password" name="pss_validado" id="pss_validado" class="pss_validado"> <br>

    <label for="correo" class="labels">Correo Electrónico</label>
    <input type="email" name="correo" id="correo" class="correo"><br><br>

    <input type="submit" id="finalizar" class="finalizar" value="Finalizar">
    </form>
    </div>
    <div class="footer">
        <p> - 2019</p>
    </div>
</body>
</html>