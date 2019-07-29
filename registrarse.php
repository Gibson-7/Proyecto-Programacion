<?php
    require("conexion.php");

    $usuario = $_POST['usuario'];
    $pss = $_POST['pss'];
    $pss_validado = $_POST['pss_validado'];
    $correo = $_POST['correo'];
    $query="INSERT INTO usuario(nombre,contrasenia,correo) VALUES (?,?,?)";
    $stmt=$db->prepare($query);
    $stmt->bind_param('sss', $usuario,$pss,$correo);
    $stmt->execute();
?>