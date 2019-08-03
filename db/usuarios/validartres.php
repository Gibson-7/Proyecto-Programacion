<?php
    session_start();
    if(!isset($_SESSION["user"]) || $_SESSION['nivel']!=3){
        header("Location:../../inicio.html");
        exit();
    }
?>