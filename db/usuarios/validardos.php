<?php
    session_start();
    if(!isset($_SESSION["user"]) && $_SESSION['nivel']!=2){
        header("Location:../../inicio.html");
        exit();
    }
?>