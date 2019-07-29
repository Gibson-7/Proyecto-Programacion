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
    <title>Alumnos</title>
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
                            <li><a href="#">Listado de equipos</a></li>
                        </ul>
                    </li>
                    <li><a>Proyectos</a>
                        <ul>
                            <li><a href="proyectos.php">Listado de proyectos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Usuario</a></li>
                    <li><a href="#">Ayuda</a></li>
                    <li><a href="#">Salir</a></li>
                </ul>
        </nav>
    </div>
</div>
    <div class="agregara">
        <form id="alumnonuevo" class="alumnonuevo" method="post">
            <fieldset>
                <legend>Agregar alumno</legend>
            <div class="divs1"><label for="nombrealumno">Nombre(s)</label>
            <input type="text" name="nombrealu" id="nombrealu"><br>
            <label for="apellidopalumno">Apellido Paterno</label>
            <input type="text" name="apellidopalu" id="apellidopalu"></div>
            <div class="divs2"><label for="apellidomalumno">Apellido Materno</label>
            <input type="text" name="apellidomalu" id="apellidomalu"><br>
            <label for="matriculaalumno">Matrícula</label>
            <input type="text" name="matriculaalumno" id="matriculaalumno"></div>
            <div class="divs3"><button class="agregar">Agregar</button></div>
            </fieldset>
        </form>
    </div>
    <div class="listalumnos">
        <h1>Listado de los alumnos</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre(s)</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Matrícula</th>
                </tr>
                <?php
                $sql="SELECT nombre,apellido_p,apellido_m,matricula FROM alumno"; //Se trae los datos de la tabla alumno
                $result=mysqli_query($conexion,$sql); //
                while ($mostrar=mysqli_fetch_array($result)){ //Va a permitir regresar los datos correspondientes de la tabla,
                    //los cuales serán mostrados dentro de los echo, que se encuentran dentro de cada <td>.
                    ?>
                <tr>
                    <td><?php echo $mostrar['nombre']?></td>
                    <td><?php echo $mostrar['apellido_p']?></td>
                    <td><?php echo $mostrar['apellido_m']?></td>
                    <td><?php echo $mostrar['matricula']?></td>
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