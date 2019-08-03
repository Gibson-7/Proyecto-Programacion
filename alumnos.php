<?php
    include_once("conexion.php");

    $sql="SELECT * FROM usuario WHERE id_rol IS NULL OR id_rol = 2 OR id_rol = 3"; //Se trae los datos de la tabla usuario
    $result=mysqli_query($conexion,$sql); //
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilos2.css">
    <script src="scripts/acciones.js" type="text/javascript"></script>
    <script src="scripts/jquery.js" type="text/javascript"></script>
    <title>Alumnos</title>
</head>
<body>

<?php
    include("db/usuarios/validaruno.php")
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
        <form class="formulario" method="post" action="db/acciones-maestro/agregaralumno.php">
            <fieldset>
                <legend>Agregar alumno</legend>

                    <div class="divs"><label for="nombrealumno">Nombre(s)</label>
                        <input type="text" name="nombrealu" id="nombrealu"><br>
                        <label for="apellidopalumno">Apellido Paterno</label>
                        <input type="text" name="apellidopalu" id="apellidopalu"><br>
                        <label for="apellidomalumno">Apellido Materno</label>
                        <input type="text" name="apellidomalu" id="apellidomalu"><br>
                    </div>

                    <div class="divs">
                        <label for="matriculalumno">Matrícula</label>
                        <input type="text" name="matriculalumno" id="matriculalumno"><br>
                        <label for="usuarioalumno">Usuario</label>
                        <input type="text" name="usuarioalu" id="usuarioalu"><br>
                        <label for="passalumno">Contraseña</label>
                        <input type="text" name="passalu" id="passalu">
                    </div>

                    <div class="divs"><input type="submit" class="agregar" value="Agregar">
                    </div>
            </fieldset>
        </form>
    </div>

    <div class="listalumnos">
        <h1>Listado de los alumnos</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre(s)</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Matrícula</th>
                    <th>Acciones</th>
                </tr>
                    <?php
                    while ($mostrar=mysqli_fetch_array($result)){ //Va a permitir regresar los datos correspondientes de la tabla,
                    //los cuales serán mostrados dentro de los echo, que se encuentran dentro de cada <td>.
                    ?>
                <tr>
                    <td><?php echo $mostrar['id']?></td>
                    <td><?php echo $mostrar['nombre']?></td>
                    <td><?php echo $mostrar['apellido_p']?></td>
                    <td><?php echo $mostrar['apellido_m']?></td>
                    <td><?php echo $mostrar['extras']?></td>
                    <td>
                        <a href="db/acciones-maestro/eliminaralumno.php?id=<?php echo $mostrar['id']?>">Eliminar</a>
                    </td>
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