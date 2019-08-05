<?php
    include_once("../../conexion.php");

    $sqla="SELECT * FROM proyecto";
    $resulta=mysqli_query($conexion,$sqla);

?>

<html>
<body>
<?php
    $id=$_REQUEST['id'];

    $ssql = "SELECT * FROM equipo WHERE id = '$id'";
    
    $resultados = mysqli_query($conexion,$ssql);
    
    $mostrar=mysqli_fetch_assoc($resultados);
?>
    <div class="agregarequi">
        <form action="mequipos.php?id=<?php echo $mostrar['id'];?>" method="post" class="formulario">
            <fieldset>
                <legend>Modificar nombre o cambiar proyecto</legend>

                <div class="divs">
                <label for="nombreequipo">Nombre del equipo</label><br>
                <input type="text" name="nombrequipo" id="nombrequipo" value="<?php echo $mostrar['nombre']; ?>">
                </div>

                <div class="divs">
                <label for="nombreproyecto">Nombre del proyecto</label><br>
                <select name="nombreproyecto" id="nombreproyecto">
                <option value ="">Seleccione...</option>
                <?php WHILE ($rows = $resulta->fetch_assoc()){ ?>
                <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre']; ?>
                </option>
                <?php } ?> 
                </select>
                </div>

                <div class="divs">
                    <input type="submit" class="agregar" id="modificare" value="Modificar">
                </div>
                </fieldset>
        </form>
    </div>
</body>
</html>