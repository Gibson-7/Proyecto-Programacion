<?php
    require("conexion.php");
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
        <table>
            <thead>
                <tr>
                    <th>Código del proyecto</th>
                    <th>Nombre de la actividad</th>
                </tr>
                <?php
                $sql="SELECT id_proyecto,nombre FROM actividad"; //Se trae los datos de la tabla alumno
                $result=mysqli_query($conexion,$sql); //
                while ($mostrar=mysqli_fetch_array($result)){ //Va a permitir regresar los datos correspondientes de la tabla,
                    //los cuales serán mostrados dentro de los echo, que se encuentran dentro de cada <td>.
                    ?>
                <tr>
                <td><?php echo $mostrar['id_proyecto']?></td>
                    <td><?php echo $mostrar['nombre']?></td>
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