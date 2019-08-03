<?php
include_once("../../conexion.php");

    $nombre = $_POST['nombredequipo']; //Recibe los valores escritos dentro del formulario
    $lequipo = $_POST['equipolid'];
    $miembro1 = $_POST['miembro1'];
    $miembro2 = $_POST['miembro2'];
    $miembro3 = $_POST['miembro3'];
    $miembro4 = $_POST['miembro4'];
    $miembro5 = $_POST['miembro5'];
    $miembro6 = $_POST['miembro6'];

    $ssql = "UPDATE equipo SET id_lider = '$lequipo' WHERE id = '$nombre'";  //Recibe la sentencia para hacer la inserción
    $sql = "UPDATE usuario SET id_rol = 2 WHERE id = '$lequipo'";//Y este permitirá modificar al usuario, haciendolo líder

    if(!empty($miembro1) && !empty($nombre)){ //Esto permitirá ingresar a los miembros, validando que el 
                                                //select option correspondiente sea diferente de vacío, al igual que 
                                                //el nombre del proyecto
        $sm1 = "INSERT INTO miembros(id_equipo,id_usuario) VALUES ('$nombre','$miembro1')";
        $m1 = "UPDATE usuario SET id_rol = 3 WHERE id = '$miembro1'"; //Este permite hacer al usuario miembro de un equipo
        $resultado3 = mysqli_query($conexion,$sm1) or die (mysqli_error($conexion));
        $resultado4 = mysqli_query($conexion,$m1) or die (mysqli_error($conexion)); //
    }

    if(!empty($miembro2) && !empty($nombre)){
        $sm2 = "INSERT INTO miembros(id_equipo,id_usuario) VALUES ('$nombre','$miembro2')";
        $m2 = "UPDATE usuario SET id_rol = 3 WHERE id = '$miembro2'";
        $resultado5 = mysqli_query($conexion,$sm2) or die (mysqli_error($conexion));
        $resultado6 = mysqli_query($conexion,$m2) or die (mysqli_error($conexion));
    }

    if(!empty($miembro3) && !empty($nombre)){
        $sm3 = "INSERT INTO miembros(id_equipo,id_usuario) VALUES ('$nombre','$miembro3')";
        $m3 = "UPDATE usuario SET id_rol = 3 WHERE id = '$miembro3'";
        $resultado7 = mysqli_query($conexion,$sm3) or die (mysqli_error($conexion));
        $resultado8 = mysqli_query($conexion,$m3) or die (mysqli_error($conexion));
    }

    if(!empty($miembro4) && !empty($nombre)){
        $sm4 = "INSERT INTO miembros(id_equipo,id_usuario) VALUES ('$nombre','$miembro4')";
        $m4 = "UPDATE usuario SET id_rol = 3 WHERE id = '$miembro4'";
        $resultado9 = mysqli_query($conexion,$sm4) or die (mysqli_error($conexion));
        $resultado10 = mysqli_query($conexion,$m4) or die (mysqli_error($conexion));
    }

    if(!empty($miembro5) && !empty($nombre)){
        $sm5 = "INSERT INTO miembros(id_equipo,id_usuario) VALUES ('$nombre','$miembro5')";
        $m5 = "UPDATE usuario SET id_rol = 3 WHERE id = '$miembro5'";
        $resultado11 = mysqli_query($conexion,$sm5) or die (mysqli_error($conexion));
        $resultado12 = mysqli_query($conexion,$m5) or die (mysqli_error($conexion));
    }

    if(!empty($miembro6) && !empty($nombre)){
        $sm6 = "INSERT INTO miembros(id_equipo,id_usuario) VALUES ('$nombre','$miembro6')";
        $m6 = "UPDATE usuario SET id_rol = 3 WHERE id = '$miembro6'";
        $resultado13 = mysqli_query($conexion,$sm6) or die (mysqli_error($conexion));
        $resultado14 = mysqli_query($conexion,$m6) or die (mysqli_error($conexion));
    }

    $resultado = mysqli_query($conexion,$ssql) or die (mysqli_error($conexion));
    $resultado2 = mysqli_query($conexion,$sql) or die (mysqli_error($conexion));
    
    $conexion->close(); //Cierra la conexión.
?>
<?php
header('location:../../equipos.php'); //Direcciona a la página que se menciona.
?>