<?php
    include_once("conexion.php");

    include("db/usuarios/validartres.php");

    $id = $_SESSION['codigo'];


    $sql = "SELECT * FROM nom_act_pro_equ WHERE miembros = $id"; 

    $resultado = mysqli_query($conexion,$sql);
    $resultad = mysqli_query($conexion,$sql);
    $resulta = mysqli_query($conexion,$sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilos2.css">
    <title>Actividades</title>
</head>

<body>


<div class="principal">
    <div class="logo">Logo</div>
    <div class="sobrante"> 
        <nav class="nav">
                <ul>
                    <li><a href="#">Buzón</a></li>
                    <li><a>Proyectos</a>
                        <ul>
                            <li><a href="actividades.php">Listado de proyectos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Usuario</a></li>
                    <li><a href="db/usuarios/cerrarsesion.php">Salir</a></li>
                </ul>
        </nav>
    </div>
</div>

<div class="agregara">
    <form action="db/acciones-miembro/guardaractividad.php" method="post" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Agregar actividad</legend>

                <div class="divs">

                    <label for="equiponom">Nombre del equipo</label><br>
                    <select name="equiponom" id="equiponom">
                    <option value ="">Seleccione...</option>
                    <?php WHILE ($rows = $resultado->fetch_assoc()){ ?>
                    <option value="<?php echo $rows['idequipo']; ?>"><?php echo $rows['equipon']; ?>
                    </option>
                    <?php } ?> 
                    </select><br><br>

                    <label for="nombreact">Nombre de la actividad</label><br>
                    <select name="codactividad" id="codactividad">
                    <option value ="">Seleccione...</option>
                    <?php WHILE ($rows = $resultad->fetch_assoc()){ ?>
                    <option value="<?php echo $rows['act']; ?>"><?php echo $rows['nombre']; ?>
                    </option>
                    <?php } ?> 
                    </select>

                </div>

                
                <div class="divs">

                    <label for="nombreproyecto">Nombre del proyecto</label><br>
                    <select name="nombreproyecto" id="nombreproyecto">
                    <option value ="">Seleccione...</option>
                    <?php WHILE ($rows = $resulta->fetch_assoc()){ ?>
                    <option value="<?php echo $rows['idproyecto']; ?>"><?php echo $rows['nombrepro']; ?>
                    </option>
                    <?php } ?> 
                    </select><br><br>

                    <label for="archivo">Archivo</label><br>
                    <input type="file" id="archivo" name="archivo">

                </div>

                <div class="divs">

                    <label for="comentariosm">Comentarios</label><br>
                    <textarea name="comentariosm" id="comentariosm" class ="comentariosm"></textarea><br>

                    <input type="submit" class="agregar" id="agregarporm" value="Agregar">

                </div>

        </fieldset>
    </form>
</div>

<div class="footer">
    <p> - 2019</p>
</div>

</body>
</html>