<?php
include_once("../../conexion.php");

    $id = $_REQUEST['id'];
    $nombrep = $_POST['nombrepro']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $descripcionp = $_POST['descripcionpro'];//que recibirá son los datos que se encuentren dentro de ese "name".
    $fechap = $_POST['fechaen'];

    $ssql = "UPDATE proyecto SET nombre = '$nombrep', descripcion = '$descripcionp', 
    fecha_entrega = '$fechap' WHERE id = '$id'";
    
    $resultado = mysqli_query($conexion,$ssql);
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../proyectos.php'); //Direcciona a la página que se menciona.
?>