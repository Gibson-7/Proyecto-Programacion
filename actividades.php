<?php
    require("conexion.php");
<<<<<<< HEAD

    $sqlo = "SELECT * FROM proyecto ORDER BY nombre ASC";
    $resultado = $conexion->query($sqlo);

    $sql="SELECT P.id AS codigo, P.nombre AS nombre_proyecto, A.nombre AS nombre_actividad, A.descripcion AS actividad_descripcion
        FROM proyecto P INNER JOIN actividad A ON P.id = A.id_proyecto"; //Se trae los datos de la tabla alumno
    $result = $conexion->query($sql); //
?>

=======
?>
>>>>>>> e478187... cambios 30 julio
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
<<<<<<< HEAD

<?php
    include("validaruno.php");
?>  

=======
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
                    <li><a href="cerrarsesion.php">Salir</a></li>
                </ul>
        </nav>
    </div>
</div>
    <div class="agregara">
        <form action="agregaractividad.php" method="post" id="actividadnuevo" class="actividadnuevo">
            <fieldset>
                <legend>Agregar nueva actividad</legend>
            <div class="divs1"><label for="nombreactividad">Nombre</label><br>
            <input type="text" name="nombreactividad" id="nombreactividad"></div>
<<<<<<< HEAD
            <div class="divs2"><label for="descripcion">Descripción</label><br>
            <textarea name="descripcionact" class="descripcionact"></textarea><br>
            <input type="submit" class="agregar" value="Agregar">
            </div>
            <div class="divs3">
                <label for="actividadproyecto">Proyecto</label><br>
            <select name="proyectoact" id="proyectoact" class="proyectoact">     
            <option value ="">Seleccione...</option>
            <?php WHILE ($rows = $resultado->fetch_assoc()){ ?>
            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre']; ?>
            </option>
            <?php } ?>       
            </select>
            </div>
            </fieldset>
        </form>
    </div>

    <div class="listaproyectos">
        <h1>Listado de actividades</h1>
=======
            <div class="divs2"><select name="proyectoact">
            <option value="0">Seleccione:</option>
            <?php
            $query = $mysqli -> query ("SELECT * FROM proyecto");
            while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id].'">'.$valores[nombre].'</option>';
            }
           ?><br>
            </div>
            <div class="divs3"><input type="submit" class="agregaract" value="Agregar"></div>
            </fieldset>
        </form>
    </div>
    <div class="listaproyectos">
        <h1>Listado de activades</h1>
>>>>>>> e478187... cambios 30 julio
        <table>
            <thead>
                <tr>
                    <th>Código del proyecto</th>
<<<<<<< HEAD
                    <th>Nombre del proyecto</th>
                    <th>Nombre de la actividad</th>
                    <th>Descripción de la actividad</th>
                </tr>
                <?php
=======
                    <th>Nombre de la actividad</th>
                </tr>
                <?php
                $sql="SELECT id_proyecto,nombre FROM actividad"; //Se trae los datos de la tabla alumno
                $result=mysqli_query($conexion,$sql); //
>>>>>>> e478187... cambios 30 julio
                while ($mostrar=mysqli_fetch_array($result)){ //Va a permitir regresar los datos correspondientes de la tabla,
                    //los cuales serán mostrados dentro de los echo, que se encuentran dentro de cada <td>.
                    ?>
                <tr>
<<<<<<< HEAD
                    <td><?php echo $mostrar['codigo']?></td>
                    <td><?php echo $mostrar['nombre_proyecto']?></td>
                    <td><?php echo $mostrar['nombre_actividad']?></td>
                    <td><?php echo $mostrar['actividad_descripcion']?></td>
=======
                <td><?php echo $mostrar['id_proyecto']?></td>
                    <td><?php echo $mostrar['nombre']?></td>
>>>>>>> e478187... cambios 30 julio
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
<<<<<<< HEAD
    
=======
>>>>>>> e478187... cambios 30 julio
</body>
</html>