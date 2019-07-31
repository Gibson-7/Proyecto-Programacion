<?php
    require("conexion.php");
<<<<<<< HEAD

    $sql="SELECT id,nombre,descripcion FROM proyecto"; //Se trae los datos de la tabla alumno
    $result=mysqli_query($conexion,$sql); //
=======
>>>>>>> e478187... cambios 30 julio
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilos2.css">
    <title>Equipos</title>
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
        <form action="agregarequipos.php" method="post" id="equiponuevo" class="equiponuevo">
            <fieldset>
                <legend>Agregar nuevo proyecto</legend>
<<<<<<< HEAD
            <div class="divs1"><label for="nombreequipo">Nombre del equipo</label><br>
            <input type="text" name="nombrequipo" id="nombrequipo"></div>
            <div class="divs2"><label for="liderproyecto">Líder del proyecto</label><br>
            <select name="proyectolid" class="proyectolid">
            <option value="0">Seleccione:</option>
            </select><br><br><br><br>
            <input type="submit" class="agregar" value="Agregar">
            </div>
            <div class="divs3"><label for="nombreproyecto">Nombre del proyecto</label><br>
            <select name="nombreproyecto" class="nombreproyecto">
            <option value="0">Seleccione:</option>
            </select></div>
=======
            <div class="divs1"><label for="nombreproyecto">Nombre</label><br>
            <input type="text" name="nombrealu" id="nombrealu"></div>
            <div class="divs2"><label for="descripcion">Descripción</label><br>
            <textarea name="descripcion" class="descripcion"></textarea><br></div>
            <div class="divs3"><input type="submit" class="agregarequ" value="Agregar"></div>
>>>>>>> e478187... cambios 30 julio
            </fieldset>
        </form>
    </div>
    <div class="listaproyectos">
        <h1>Listado de los proyectos</h1>
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre del proyecto</th>
                    <th>Descripción</th>
                </tr>
                <?php
<<<<<<< HEAD
=======
                $sql="SELECT id,nombre,descripcion FROM proyecto"; //Se trae los datos de la tabla alumno
                $result=mysqli_query($conexion,$sql); //
>>>>>>> e478187... cambios 30 julio
                while ($mostrar=mysqli_fetch_array($result)){ //Va a permitir regresar los datos correspondientes de la tabla,
                    //los cuales serán mostrados dentro de los echo, que se encuentran dentro de cada <td>.
                    ?>
                <tr>
                <td><?php echo $mostrar['id']?></td>
                    <td><?php echo $mostrar['nombre']?></td>
                    <td><?php echo $mostrar['descripcion']?></td>
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