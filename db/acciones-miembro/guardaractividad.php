<?php
include_once("../../conexion.php");

    include("db/usuarios/validartres.php");

    $id = $_SESSION['codigo'];
    $codactividad = $_POST['codactividad'];//Se crea una variable para cada dato, la cual será igual al POST y lo
    $actividad = $_POST['archivo']; //que recibirá son los datos que se encuentren dentro de ese "name".     
    $equipo = $_POST['equiponom'];
    $proyecto = $_POST['nombreproyecto'];
    $comentario = $_POST['comentariosm'];

    $sqli = "INSERT INTO comentario(comentario,id_actividad,id_proyecto,id_equipo) VALUES ('$comentario','$codactividad','$proyecto','$equipo')";
    //$sql = "SELECT * FROM actividad_usuario WHERE id_usuario ='$id' AND id_actividad = '$codactividad";

    $resultado = mysqli_query($conexion,$sqli) or die (mysqli_error($conexion));
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../actividadesm.php'); //Direcciona a la página que se menciona.
?>