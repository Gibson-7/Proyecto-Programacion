<?php
include_once("../../conexion.php");

    $nombre = $_POST['nombrequipo']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $proyecto = $_POST['nombreproyecto'];//que recibirá son los datos que se encuentren dentro de ese "name".

    $ssql = "INSERT INTO equipo(nombre,id_proyecto) VALUES ('$nombre','$proyecto')"; 
    //Realiza la consulta mencionada.
    $resultado = mysqli_query($conexion,$ssql);//Guarda la consulta realizada. 
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../equipos.php'); //Direcciona a la página que se menciona.
?>