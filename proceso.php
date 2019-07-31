<?php
session_start();
$conexion = mysqli_connect( 'localhost', 'root', '', 'proyecto'); //Conecta a la base de datos
if(mysqli_connect_errno()){//En caso de que no se logre conectar
    echo '<p>Error: no se logró conectar a la Base de Datos.<br />
    Por favor intenta de nuevo más tarde.</p>';
    exit();
}
$sql = sprintf("SELECT * FROM usuario WHERE nombreu ='%s' AND contrasenia = '%s'", $_POST['usr'], $_POST['pass']);
$query = mysqli_query($conexion,$sql);
$fila = mysqli_fetch_assoc($query);
$encontrados = mysqli_num_rows($query);
if($encontrados >= 1){
	$_SESSION['usuario'] = $fila['nombreu'];
    $_SESSION['nivel'] = $fila['id_rol'];
    if ($_SESSION['nivel']==3){
		header('Location:prueba.html');	
	}
	else if ($_SESSION['nivel']==2){
		header('Location:iniciars.html');	
	}
	else if ($_SESSION['nivel']==1){
		header('Location:index.php');	
	}
}
else{
	header('Location:iniciars.php');
}
?>