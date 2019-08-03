<?php
    session_start();
    if(!isset($_SESSION["user"]) || $_SESSION['nivel']=1){
        header("Location:../../inicio.html");
        exit();
        ?>
    <?php}if(isset($_SESSION["user"]) && $_SESSION['nivel']=3){
        ?>
    <div class="principal">
        <div class="logo">Logo</div>
        <div class="sobrante"> 
            <nav class="nav">
                    <ul>
                        <li><a href="#">Buzón</a></li>
                        <li><a>Proyectos</a></li>
                        <li><a href="#">Usuario</a></li>
                        <li><a href="db/usuarios/cerrarsesion.php">Salir</a></li>
                    </ul>
            </nav>
        </div>
    </div>
    <?php }if(isset($_SESSION["user"]) && $_SESSION['nivel']=2){ ?>
    <div class="principal">
    <div class="logo">Logo</div>
    <div class="sobrante"> 
        <nav class="nav">
                <ul>
                    <li><a href="#">Buzón</a></li>
                    <li><a>Proyectos</a>
                        <ul>
                        <li><a href="actividadeslider.php" disabled>Listado de proyectos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Usuario</a></li>
                    <li><a href="db/usuarios/cerrarsesion.php">Salir</a></li>
                </ul>
        </nav>
    </div>
</div>
<?php } ?>