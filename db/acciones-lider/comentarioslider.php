<?php

include_once("../../conexion.php");

    $equipo = $_POST['equiponom'];//Se crea una variable para cada dato, la cual será igual al POST y lo
    $actividad = $_POST['nomactividad']; //que recibirá son los datos que se encuentren dentro de ese "name".     
    $proyecto = $_POST['proyectonom'];
    $comentario = $_POST['comentariosl'];
    $estatus = $_POST['estatus'];

    $sqli = "INSERT INTO comentario(comentario,id_actividad,id_proyecto,id_equipo) VALUES ('$comentario','$actividad','$proyecto','$equipo')";
    //Consulta que insertará un nuevoo dato dentro de la tabla comentario
    $sql = "UPDATE actividad_usuario SET estatus = '$estatus' WHERE id_actividad = '$actividad'";
    //Consulta que actualizará el estatus según el id de la actividad.
    
    $resultado = mysqli_query($conexion,$sqli);//Guarda la consulta realizada. 
    $resulta = mysqli_query($conexion,$sql);
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../actividadeslider.php'); //Direcciona a la página que se menciona.
?>