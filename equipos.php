<?php
    require("conexion.php");

    $sql="SELECT * FROM usuario WHERE id_rol IS NULL"; //Se trae los datos de la tabla alumno
    $resultado=mysqli_query($conexion,$sql); //Se hace la variable que almacenará lo que traiga la selección anterior
    $miembro1=mysqli_query($conexion,$sql); //Se hizo una variable para cada miembro, ya que al momento de hacer los
    $miembro2=mysqli_query($conexion,$sql); //select option con una misma, solamente una mostraba los usuarios
    $miembro3=mysqli_query($conexion,$sql); //
    $miembro4=mysqli_query($conexion,$sql); //
    $miembro5=mysqli_query($conexion,$sql); //
    $miembro6=mysqli_query($conexion,$sql); //

    $sqlo="SELECT * FROM equipo";
    $result=mysqli_query($conexion,$sqlo); 

    $sqla="SELECT * FROM proyecto";
    $resulta=mysqli_query($conexion,$sqla); 
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
    <div class="agregarequi">
        <form action="agregarequipo.php" method="post" class="equipo">
            <fieldset>
                <legend>Agregar nuevo equipo</legend>

                <div class="divs">
                <label for="nombreequipo">Nombre del equipo</label><br>
                <input type="text" name="nombrequipo" id="nombrequipo">
                </div>

                <div class="divs"><label for="nombreproyecto">Nombre del proyecto</label><br>
                <select name="nombreproyecto" id="nombreproyecto">
                <option value ="">Seleccione...</option>
                <?php WHILE ($rows = $resulta->fetch_assoc()){ ?><!-- Llama a la variable anterior, guardándola
                dentro de otra variable llamada rows, la cual permite hacer la busqueda mediante las filas-->
                <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre']; ?><!-- Se ingresan dentro
                 del option para que aparezcan como las opciones a escogrer.-->
                </option>
                <?php } ?> 
                </select>
                </div>

                <div class="divs">
                    <input type="submit" class="agregar" id="agregarne" value="Agregar">
                </div>
                </fieldset>
        </form>

        <form action="formarequipos.php" method="post" class="equipo">
            <fieldset>
            <legend>Agregar lider y miembros</legend>

            <div class="divs">
            <label for="nombredequipo">Nombre del equipo</label><br>
            <select name="nombredequipo" id="nombredequipo"><br>
            <option value ="">Seleccione...</option>
            <?php WHILE ($rows = $result->fetch_assoc()){ ?>
            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre']; ?>
            </option>
            <?php } ?> 
            </select><br><br>

            <label for="miembro2">Miembro 2</label><br>
            <select name="miembro2" id="miembro2">
            <option value ="">Seleccione...</option>
            <?php WHILE ($rows = $miembro2->fetch_assoc()){ ?>
            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre'].' '.$rows['apellido_p'].' '.$rows['apellido_m']; ?>
            </option>
            <?php } ?>       
            </select><br><br>

            <label for="miembro5">Miembro 5</label><br>
            <select name="miembro5" id="miembro5">
            <option value ="">Seleccione...</option>
            <?php WHILE ($rows = $miembro5->fetch_assoc()){ ?>
            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre'].' '.$rows['apellido_p'].' '.$rows['apellido_m']; ?>
            </option>
            <?php } ?>       
            </select><br><br>
            </div>

            <div class="divs">
            <label for="liderproyecto">Líder del equipo</label><br>
            <select name="equipolid" class="equipolid">
            <option value ="">Seleccione...</option>
            <?php WHILE ($rows = $resultado->fetch_assoc()){ ?>
            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre'].' '.$rows['apellido_p'].' '.$rows['apellido_m']; ?>
            </option>
            <?php } ?>       
            </select><br><br>

            <label for="miembro3">Miembro 3</label><br>
            <select name="miembro3" id="miembro3">
            <option value ="">Seleccione...</option>
            <?php WHILE ($rows = $miembro3->fetch_assoc()){ ?>
            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre'].' '.$rows['apellido_p'].' '.$rows['apellido_m']; ?>
            </option>
            <?php } ?>       
            </select><br><br>

            <label for="miembro6">Miembro 6</label><br>
            <select name="miembro6" id="miembro6">
            <option value ="">Seleccione...</option>
            <?php WHILE ($rows = $miembro6->fetch_assoc()){ ?>
            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre'].' '.$rows['apellido_p'].' '.$rows['apellido_m']; ?>
            </option>
            <?php } ?>       
            </select><br><br>

            </div>

            <div class="divs">
            <label for="miembro1">Miembro 1</label><br>
            <select name="miembro1" id="miembro1">
            <option value ="">Seleccione...</option>
            <?php WHILE ($rows = $miembro1->fetch_assoc()){ ?>
            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre'].' '.$rows['apellido_p'].' '.$rows['apellido_m']; ?>
            </option>
            <?php } ?>       
            </select><br><br>

            <label for="miembro4">Miembro 4</label><br>
            <select name="miembro4" id="miembro4">
            <option value ="">Seleccione...</option>
            <?php WHILE ($rows = $miembro4->fetch_assoc()){ ?>
            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre'].' '.$rows['apellido_p'].' '.$rows['apellido_m']; ?>
            </option>
            <?php } ?>       
            </select><br><br>

            <input type="submit" class="agregar" id="agregarme" value="Agregar"></div>
            </fieldset>
        </form>

    </div>
    <div class="footer">
        <p> - 2019</p>
    </div>
</body>
</html>