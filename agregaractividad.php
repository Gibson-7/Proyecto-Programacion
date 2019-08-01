<?php
include_once("conexion.php");

    $nombre = $_POST['nombreactividad']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $proyecto = $_POST['proyectoact'];//que recibirá son los datos que se encuentren dentro de ese "name".
    $descripcion = $_POST['descripcionact'];

    $ssql = "INSERT INTO actividad(nombre, id_proyecto, descripcion) VALUES ('$nombre','$proyecto', '$descripcion')";
    
    $resultado = mysqli_query($conexion,$ssql) or die (mysqli_error($conexion));
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:actividades.php'); //Direcciona a la página que se menciona.
?>