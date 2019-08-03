<?php

include_once("../../conexion.php");

    $equipo = $_POST['equiponom'];//Se crea una variable para cada dato, la cual será igual al POST y lo
    $actividad = $_POST['nomactividad']; //que recibirá son los datos que se encuentren dentro de ese "name".     
    $proyecto = $_POST['proyectonom'];
    $comentario = $_POST['comentariosl'];

    $sqli = "INSERT INTO comentario(comentario,id_actividad,id_proyecto,id_equipo) VALUES ('$comentario','$actividad','$proyecto','$equipo')";

    $resultado = mysqli_query($conexion,$sqli) or die (mysqli_error($conexion));
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../actividadeslider.php'); //Direcciona a la página que se menciona.
?>