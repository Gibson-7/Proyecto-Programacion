<?php

    include_once("conexion.php");

    $nombre = $_POST['nombre']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $apellido_p = $_POST['apellidop'];//que recibirá son los datos que se encuentren dentro de ese "name".
    $apellido_m = $_POST['apellidom'];
    $rfc = $_POST['rfc'];
    $fecha_nac = $_POST['fechana'];
    $nombreu = $_POST['usuario'];   
    $contrasenia = $_POST['pss'];
    $contraseniav = $_POST['pss_validado'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO usuario(usuario,contrasenia,correo,id_rol,nombre,apellido_p,apellido_m,fecha_nacimiento,extras) 
    VALUES ('$nombreu','$contrasenia','$correo','1','$nombre','$apellido_p','$apellido_m','$fecha_nac','$rfc')";

    $resultado = mysqli_query($conexion,$sql) or die (mysqli_error($conexion));

    $conexion->close(); //Cierra la conexión.
    
?>
<?php

header("Location: iniciars.php");

?>