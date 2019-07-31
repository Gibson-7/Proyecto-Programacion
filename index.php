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
<<<<<<< HEAD
    require_once("conexion.php");
?>
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
    include("validaruno.php");
?>
=======
    session_start();

    if(isset($_SESSION['usuario'])){
    }
    else{
        header("Location:inicio.html");
    }
    ?>
>>>>>>> e478187... cambios 30 julio
<div class="principal">
    <div class="logo">Logo</div>
    <div class="sobrante"> 
        <nav class="nav">
                <ul>
                    <li><a href="#">Buzón</a></li>
                    <li><a>Alumnos</a>
                        <ul>
                            <li><a href="alumnos.php">Listado de alumnos</a></li>
<<<<<<< HEAD
                            <li><a href="equipos.php">Listado de equipos</a></li>
=======
                            <li><a href="#">Listado de equipos</a></li>
>>>>>>> e478187... cambios 30 julio
                        </ul>
                    </li>
                    <li><a>Proyectos</a>
                        <ul>
                            <li><a href="proyectos.php">Listado de proyectos</a></li>
<<<<<<< HEAD
                            <li><a href="actividades.php">Listado de actividades</a></li>
=======
>>>>>>> e478187... cambios 30 julio
                        </ul>
                    </li>
                    <li><a href="#">Usuario</a></li>
                    <li><a href="#">Ayuda</a></li>
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
