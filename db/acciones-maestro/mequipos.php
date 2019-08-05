<?php
include_once("../../conexion.php");

    $id = $_REQUEST['id'];
    $nombre = $_POST['nombrequipo']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $proyecto = $_POST['nombreproyecto'];//que recibirá son los datos que se encuentren dentro de ese "name".

    $ssql = "UPDATE equipo SET nombre = '$nombre', id_proyecto = '$proyecto' WHERE id = '$id'";
    //Realiza la consulta
    $resultado = mysqli_query($conexion,$ssql);//Guarda la consulta
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../equipos.php'); //Direcciona a la página que se menciona.
?>