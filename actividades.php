<?php
    include_once("conexion.php");

    $sqlo = "SELECT * FROM proyecto ORDER BY nombre ASC";
    $resultado = $conexion->query($sqlo);

    $sql="SELECT P.id AS codigo, P.nombre AS nombre_proyecto, A.nombre AS nombre_actividad, A.descripcion AS actividad_descripcion
        FROM proyecto P INNER JOIN actividad A ON P.id = A.id_proyecto"; //Se trae los datos de la tabla alumno
    $result = $conexion->query($sql); //
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

<?php
    include("db/usuarios/validaruno.php");
?>  

<div class="principal">
    <div class="logo">Logo</div>
    <div class="sobrante"> 
        <nav class="nav">
                <ul>
                    <li><a href="#">Buzón</a></li>
                    <li><a>Alumnos</a>
                        <ul>
                            <li><a href="alumnos.php">Listado de alumnos</a></li>
                            <li><a href="equipos.php">Listado de equipos</a></li>
                        </ul>
                    </li>
                    <li><a>Proyectos</a>
                        <ul>
                            <li><a href="proyectos.php">Listado de proyectos</a></li>
                            <li><a href="actividades.php">Listado de actividades</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Usuario</a></li>
                    <li><a href="#">Ayuda</a></li>
                    <li><a href="db/usuarios/cerrarsesion.php">Salir</a></li>
                </ul>
        </nav>
    </div>
</div>

    <div class="agregara">
        <form action="db/acciones-maestro/agregaractividad.php" method="post" class="formulario">
            <fieldset>
                <legend>Agregar nueva actividad</legend>

                    <div class="divs">
                        <label for="nombreactividad">Nombre</label><br>
                        <input type="text" name="nombreactividad" id="nombreactividad">
                    </div>

                    <div class="divs">
                        <label for="descripcion">Descripción</label><br>
                        <textarea name="descripcionact" id="descripcionact"></textarea><br>
                        <input type="submit" class="agregar" value="Agregar">
                    </div>

                    <div class="divs">
                        <label for="actividadproyecto">Proyecto</label><br>
                        <select name="proyectoact" id="proyectoact" class="proyectoact">     
                        <option value ="">Seleccione...</option>
                        <?php WHILE ($rows = $resultado->fetch_assoc()){ ?>
                        <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre'] ?>
                        </option>
                        <?php } ?>       
                        </select>
                    </div>
                    
            </fieldset>
        </form>
    </div>

    <div class="listaproyectos">
        <h1>Listado de actividades</h1>
            <table>
                <thead>
                    <tr>
                        <th>Código del proyecto</th>
                        <th>Nombre del proyecto</th>
                        <th>Nombre de la actividad</th>
                        <th>Descripción de la actividad</th>
                    </tr>
                        <?php
                        while ($mostrar=mysqli_fetch_array($result)){ //Va a permitir regresar los datos correspondientes de la tabla,
                        //los cuales serán mostrados dentro de los echo, que se encuentran dentro de cada <td>.
                        ?>
                    <tr>
                        <td><?php echo $mostrar['codigo']?></td>
                        <td><?php echo $mostrar['nombre_proyecto']?></td>
                        <td><?php echo $mostrar['nombre_actividad']?></td>
                        <td><?php echo $mostrar['actividad_descripcion']?></td>
                    </tr>
                        <?php
                        }//Se cierra el while aquí, para así poder generar cada tupla que exista dentro de la tabla.
                        ?>
                </thead>
            </table>
    </div>

    <div class="footer">
        <p> - 2019</p>
    </div>
    
</body>
</html>