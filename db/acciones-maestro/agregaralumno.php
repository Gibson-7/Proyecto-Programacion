<?php
include_once("../../conexion.php");

    $nomalu = $_POST['nombrealu']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $apepa = $_POST['apellidopalu'];//que recibirá son los datos que se encuentren dentro de ese "name".
    $apema = $_POST['apellidomalu'];
    $matricula = $_POST['matriculalumno'];
    $usra = $_POST['usuarioalu'];
    $passa = $_POST['passalu'];

    $ssql = "INSERT INTO usuario(usuario,contrasenia,nombre,apellido_p,apellido_m,extras) VALUES ('$usra','$passa','$nomalu','$apepa','$apema','$matricula')";
    //Realiza la consulta.
    $resultado = mysqli_query($conexion,$ssql);//Guarda la consulta realizada. 
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../alumnos.php'); //Direcciona a la página que se menciona.
?>