<?php
<<<<<<< HEAD

    include_once("conexion.php");

=======
    $conexion=new mysqli('localhost', 'root', '', 'proyecto'); //Se hace la conexión a la base de datos
    if(mysqli_connect_errno()){ //En caso de que de error, aparecerá un mensaje.
        echo '<p>Error: no se logró conectar a la Base de Datos.<br />
        Por favor intenta de nuevo más tarde.</p>';
        exit();
    }
>>>>>>> e478187... cambios 30 julio
    $nombre = $_POST['nombre']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $apellido_p = $_POST['apellidop'];//que recibirá son los datos que se encuentren dentro de ese "name".
    $apellido_m = $_POST['apellidom'];
    $rfc = $_POST['rfc'];
    $fecha_nac = $_POST['fechana'];
<<<<<<< HEAD
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

=======
    $sql = "INSERT INTO maestro(nombre,apellido_p,apellido_m,rfc,fecha_nac) VALUES ('$nombre','$apellido_p','$apellido_m','$rfc','$fecha_nac')";
    //Se crea una variable, la cual permitirá insertar los valores dentro de la base de datos.
    if($conexion->query($sql)===true){
    }
    else{
        die("Error al insertar los datos.");
    }
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:registrarse.php'); //Direcciona a la página que se menciona.
>>>>>>> e478187... cambios 30 julio
?>