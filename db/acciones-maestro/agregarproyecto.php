<?php
include_once("../../conexion.php");

    $nombrep = $_POST['nombrepro']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $descripcionp = $_POST['descripcionpro'];//que recibirá son los datos que se encuentren dentro de ese "name".
    $fechap = $_POST['fechaen'];

    $ssql = "INSERT INTO proyecto(nombre,descripcion,fecha_entrega) VALUES ('$nombrep','$descripcionp','$fechap')";
    //Realiza la consulta.
    $resultado = mysqli_query($conexion,$ssql);//Guarda la consulta realizada. 
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../proyectos.php'); //Direcciona a la página que se menciona.
?>