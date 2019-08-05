<?php
include_once("../../conexion.php");

    $nombre = $_POST['equinom']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $cali = $_POST['calificacion'];//que recibirá son los datos que se encuentren dentro de ese "name".

    $ssql = "UPDATE equipo SET calificacion = '$cali' WHERE id = '$nombre'";
    //Realiza la consulta
    $resultado = mysqli_query($conexion,$ssql);//Guarda la consulta
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../equipos.php'); //Direcciona a la página que se menciona.
?>