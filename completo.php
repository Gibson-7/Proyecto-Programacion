<?php
$conexion=new mysqli('localhost', 'root', '', 'proyecto'); //Se hace la conexión a la base de datos
    if(mysqli_connect_errno()){ //En caso de que de error, aparecerá un mensaje.
        echo '<p>Error: no se logró conectar a la Base de Datos.<br />
        Por favor intenta de nuevo más tarde.</p>';
        exit();
    }
    $nombreu = $_POST['usuario']; //Se crea una variable para cada dato, la cual será igual al POST y lo    
    $contrasenia = $_POST['pss'];//que recibirá son los datos que se encuentren dentro de ese "name".
    $contraseniav = $_POST['pss_validado'];
    $correo = $_POST['correo'];
    $sql = "INSERT INTO usuario(nombreu,contrasenia,correo,id_rol) VALUES ('$nombreu','$contrasenia','$correo','1')";
    //Se crea una variable, la cual permitirá insertar los valores dentro de la base de datos.
    $sqli = "INSERT INTO maestro(id_rol) VALUES (mysqli_last_id)"
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