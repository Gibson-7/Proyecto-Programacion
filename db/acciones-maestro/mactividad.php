<?php
include_once("../../conexion.php");

    $id = $_REQUEST['id'];
    $nombre = $_POST['nombreactividad']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $proyecto = $_POST['proyectoact'];//que recibirá son los datos que se encuentren dentro de ese "name".
    $descripcion = $_POST['descripcionact'];

    $ssql = "UPDATE actividad SET nombre = '$nombre', descripcion = '$descripcion', 
    id_proyecto = '$proyecto' WHERE id = '$id'"; //Realiza la consulta
    
    $resultado = mysqli_query($conexion,$ssql);//Guarda la consulta realizada. 
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../actividades.php'); //Direcciona a la página que se menciona.
?>