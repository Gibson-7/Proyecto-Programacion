<?php
    include_once("conexion.php");

    include("db/usuarios/validartres.php");

    $id = $_SESSION['codigo'];


    $sql = "SELECT * FROM nom_act_pro_equ WHERE miembros = $id"; 

    $resultado = mysqli_query($conexion,$sql);
    $resultad = mysqli_query($conexion,$sql);
    $resulta = mysqli_query($conexion,$sql);

    $sqli="SELECT * FROM actividad_usuario WHERE id_usuario = $id"; 
    $result=mysqli_query($conexion,$sqli);

    $sacarco = "SELECT * FROM act_arc_com WHERE usuario = $id";
    $resu = mysqli_query($conexion,$sacarco);
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
    <form action="db/upload/guardararchivos.php" method="post" class="formulario" enctype="multipart/form-data">
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
                    </select><br>

                    <label for="comentariosm">Comentarios</label><br>
                    <textarea name="comentariosm" id="comentariosm" class ="comentariosm"></textarea><br>

                </div>

                <div class="divs">

                    <label for="tarchivo">Archivo</label><br>
                    <input type="file" id="archivo" name="archivo">
                    <br><br><br>
                    <input type="submit" class="agregar" id="agregarporm" value="Agregar">

                </div>

        </fieldset>
    </form>
</div>

<div class="listalumnos">
        <h1>Progreso de mis actividades</h1>
        <table>
            <thead>
                <tr>
                    <th>Actividad</th>
                    <th>Estatus</th>
                    <th>Archivo</th>
                    <th>Comentario</th>
                </tr>
                    <?php
                    while ($mostrar=mysqli_fetch_array($resu)){ //Va a permitir regresar los datos correspondientes de la tabla,
                    //los cuales serán mostrados dentro de los echo, que se encuentran dentro de cada <td>.
                    ?>
                <tr>
                    <td><?php echo $mostrar['nombrea']?></td>
                    <td><?php echo $mostrar['estatus']?></td>
                    <td><a href="db/upload/<?php echo $mostrar['archivo']?>" download="<?php echo $mostrar['archivo']?>"><?php echo $mostrar['archivo']?></a></td>
                    <td><?php echo $mostrar['comentario']?></td>
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