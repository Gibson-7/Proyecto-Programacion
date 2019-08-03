<?php
include_once("../../conexion.php");

    $ida = $_GET['id'];

    $ssql = "DELETE FROM usuario WHERE id='$ida'";
    
    $resultado = mysqli_query($conexion,$ssql) or die (mysqli_error($conexion));
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../alumnos.php'); //Direcciona a la página que se menciona.
?>