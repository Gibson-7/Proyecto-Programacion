<?php
include_once("../../conexion.php");

    include("../usuarios/validartres.php");

    $directorio = "archivos/"; ///Llama a la direccion donde se guardará
    $archivo = $directorio.basename($_FILES['archivo']['name']);//Se registrará con el nombre del directorio 
    //y el nombre que tenga dicho archivo
    
    $id = $_SESSION['codigo'];

    $codactividad = $_POST['codactividad']; 
    $equipo = $_POST['equiponom'];
    $proyecto = $_POST['nombreproyecto'];
    $comentario = $_POST['comentariosm'];

    $sqli = "INSERT INTO comentario(comentario,id_actividad,id_proyecto,id_equipo) VALUES ('$comentario','$codactividad','$proyecto','$equipo')";
    $sql = "UPDATE actividad_usuario SET archivo = '$archivo' WHERE id_actividad = '$codactividad' AND id_usuario = '$id'";

    $resultado = mysqli_query($conexion,$sqli);
    $res = mysqli_query($conexion,$sql);
    
    move_uploaded_file($_FILES["archivo"]["tmp_name"],$archivo);//Asegura que el archivo subido es valido

    $conexion->close(); //Cierra la conexión.
?>
<?php
    header("Location: ../../actividadesm.php");
?>
