<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilos2.css">
    <title>Index</title>
</head>
<body>
<?php
    session_start();
    if ($_SESSION['nivel']==2 || $_SESSION['nivel']==3){
    }
    else {
        header("Location: inicio.html");
    }
    ?>
<div class="principal">
    <div class="logo">Logo</div>
    <div class="sobrante"> 
        <nav class="nav">
                <ul>
                    <li><a href="#">Buzón</a></li>
                    <li><a>Proyectos</a>
                        <ul>
                            <li><a href="proyectos.php">Listado de proyectos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Usuario</a></li>
                    <li><a href="cerrarsesion.php">Salir</a></li>
                </ul>
        </nav>
    </div>
</div>
    <div class="footer">
        <p> - 2019</p>
    </div>
</body>
</html>
