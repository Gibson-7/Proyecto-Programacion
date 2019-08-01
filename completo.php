<?php
include_once("conexion.php");

    $nombreu = $_POST['usuario']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $contrasenia = $_POST['pss'];//que recibirá son los datos que se encuentren dentro de ese "name".
    $contraseniav = $_POST['pss_validado'];
    $correo = $_POST['correo'];

    session_start();
    
    $_SESSION['clave']
    $sql = "INSERT INTO maestro(usuario,contrasenia,correo,id_rol) VALUES ('$nombreu','$contrasenia','$correo','1')
    WHERE rfc = '$_SESSION['clave']'";
    //Se crea una variable, la cual permitirá insertar los valores dentro de la base de datos.
    if($conexion->query($sql)===true){
    }
    else{
        die("Error al insertar los datos.");
    }
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:iniciars.php'); //Direcciona a la página que se menciona.
?>