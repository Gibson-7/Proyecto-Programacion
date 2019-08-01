<?php
session_start();
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
?>