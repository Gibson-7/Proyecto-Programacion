<?php
include_once("../../conexion.php");

    include("../usuarios/validardos.php");

    $directorio = "archivos/"; ///Llama a la direccion donde se guardará
    $archivo = $directorio.basename($_FILES['archivo']['name']);//Se registrará con el nombre del directorio 
    //y el nombre que tenga dicho archivo
    
    $id = $_SESSION['codigo'];
    $equipo = $_POST['equiponomb'];

    $sql = "UPDATE equipo SET actividadfinal = '$archivo' WHERE id = '$equipo' AND id_lider = '$id'";

    $res = mysqli_query($conexion,$sql);
    
    move_uploaded_file($_FILES["archivo"]["tmp_name"],$archivo);//Asegura que el archivo subido es valido

    $conexion->close(); //Cierra la conexión.
?>
<?php
    header("Location: ../../actividadeslider.php");
?>
