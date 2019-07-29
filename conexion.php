<?php
    $conexion = mysqli_connect( 'localhost', 'root', '', 'proyecto'); //Conecta a la base de datos
    if(mysqli_connect_errno()){//En caso de que no se logre conectar
        echo '<p>Error: no se logró conectar a la Base de Datos.<br />
        Por favor intenta de nuevo más tarde.</p>';
        exit();
    }
?>