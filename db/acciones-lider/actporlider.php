<?php
include_once("../../conexion.php");

    $actividad = $_POST['asiactividad']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $usuario = $_POST['usuactividad'];//que recibirá son los datos que se encuentren dentro de ese "name".
    $fecha = $_POST['fechaacte'];

    $sql = "INSERT INTO actividad_usuario(id_actividad,id_usuario,estatus,fecha_entrega) VALUES ('$actividad','$usuario','Sin comenzar','$fecha')"; 

    $resultado = mysqli_query($conexion,$sql);//Guarda la consulta realizada. 
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../actividadeslider.php'); //Direcciona a la página que se menciona.
?>