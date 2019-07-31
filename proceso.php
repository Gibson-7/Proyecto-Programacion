<?php
session_start();
<<<<<<< HEAD
include_once("conexion.php");

$user = $_POST['usr'];//Recibe los valores que se encuentran dentro de los inputs de inicias.php
$contra = $_POST['pass'];

$sql = "SELECT * FROM usuario WHERE usuario ='$user' AND contrasenia = '$contra'";//Se hace la consulta,
//la cual será guardada dentro de $sql.
$result = (mysqli_query($conexion,$sql));  

$row = mysqli_fetch_array($result);

$_SESSION['user'] = $row['usuario'];
$_SESSION['nombre'] = $row['nombre'];
$_SESSION['apellidop'] = $row['apellido_p'];
$_SESSION['apellidom'] = $row['apellido_m'];
$_SESSION['nivel'] = $row['id_rol'];

if($_SESSION['nivel']==1){header("Location: index.php");exit();}
else if($_SESSION['nivel']==2){header("Location: indexalumno.php");exit();}
else if($_SESSION['nivel']==3){header("Location: indexalumno.php");exit();}
else{header("Location: iniciars.php");exit();}

$conexion->close(); 
=======
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
>>>>>>> e478187... cambios 30 julio
?>