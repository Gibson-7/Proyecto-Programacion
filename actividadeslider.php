<?php
    include_once("conexion.php");

    include("db/usuarios/validardos.php");

    $id = $_SESSION['codigo'];

    $sql = "SELECT usuario,nombre,apellido_p,apellido_m FROM miembroslider WHERE lider = $id";
    $resultado = mysqli_query($conexion,$sql);

    $ssql = "SELECT * FROM actividadnombre WHERE lider = $id";
    $resulta = mysqli_query($conexion,$ssql);
    $ress = mysqli_query($conexion,$ssql);

    $sqli = "SELECT * FROM equipo WHERE id_lider = $id"; 
    $res = mysqli_query($conexion,$sqli);

    $sq = "SELECT proyecto,pronombre FROM proyectonombre WHERE usuario = $id";
    $resss = mysqli_query($conexion,$sq);


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
                            <li><a href="actividadeslider.php">Listado de proyectos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Usuario</a></li>
                    <li><a href="db/usuarios/cerrarsesion.php">Salir</a></li>
                </ul>
        </nav>
    </div>
</div>

<div class="agregara">

    <form action="db/acciones-lider/actporlider.php" method="post" class="formulario">
        <fieldset>
            <legend>Asignar actividades</legend>

                <div class="divs">
                    <label for="usuact">Miembro</label><br>
                    <select name="usuactividad" id="usuactividad">
                    <option value ="">Seleccione...</option>
                    <?php WHILE ($rows = $resultado->fetch_assoc()){ ?>
                    <option value="<?php echo $rows['usuario']; ?>"><?php echo $rows['nombre'].' '.$rows['apellido_p'].' '.$rows['apellido_m']; ?>
                    </option>
                    <?php } ?>       
                    </select>
                </div>

                
                <div class="divs">
                    <label for="asiactividad">Actividad</label><br>
                    <select name="asiactividad" id="asiactividad">
                    <option value ="">Seleccione...</option>
                    <?php WHILE ($row = $resulta->fetch_assoc()){ ?>
                    <option value="<?php echo $row['codactividad']; ?>"><?php echo $row['nombreactividad']; ?>
                    </option>
                    <?php } ?>       
                    </select>
                </div>

                <div class="divs">
                    <label for="fechaacte">Fecha de entrega</label><br>
                    <input type="date" id="fechaacte" name="fechaacte"><br>
                    <input type="submit" class="agregar" id="agregarlidact" value="Agregar">
                </div>

        </fieldset>
    </form>

    <form action="db/acciones-lider/comentarioslider.php" method="post" class="formulario">
        <fieldset>
            <legend>Agregar comentario</legend>

                <div class="divs">

                    <label for="equiponom">Nombre del equipo</label><br>
                    <select name="equiponom" id="equiponom">
                    <option value ="">Seleccione...</option>
                    <?php WHILE ($rows = $res->fetch_assoc()){ ?>
                    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre']; ?>
                    </option>
                    <?php } ?> 
                    </select><br><br>    
                    
                    <label for="nomactividad">Actividad</label><br>
                    <select name="nomactividad" id="nomactividad">
                    <option value ="">Seleccione...</option>
                    <?php WHILE ($rows = $ress->fetch_assoc()){ ?>
                    <option value="<?php echo $rows['codactividad']; ?>"><?php echo $rows['nombreactividad']; ?>
                    </option>
                    <?php } ?>       
                    </select>

                </div>

                <div class="divs">

                    <label for="proyectonom">Nombre del proyecto</label><br>
                    <select name="proyectonom" id="proyectonom">
                    <option value ="">Seleccione...</option>
                    <?php WHILE ($rows = $resss->fetch_assoc()){ ?>
                    <option value="<?php echo $rows['proyecto']; ?>"><?php echo $rows['pronombre']; ?>
                    </option>
                    <?php } ?> 
                    </select><br><br>
                    
                    <label for="comentariosl">Comentarios</label><br>
                    <textarea name="comentariosl" id="comentariosl" class ="comentariosl"></textarea><br>
                </div>

                <div class="divs">
                    <br><br>
                    <input type="submit" class="agregar" id="agregarlidcom" value="Agregar">
                </div>

        </fieldset>

    </form>

</div>

<div class="footer">
    <p> - 2019</p>
</div>

</body>
</html>