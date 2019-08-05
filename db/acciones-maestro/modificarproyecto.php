<?php
include_once("../../conexion.php");
?>

<html>
<body>
<?php
    $id=$_REQUEST['id'];

    $ssql = "SELECT * FROM proyecto WHERE id = '$id'";
    
    $resultado = mysqli_query($conexion,$ssql) or die (mysqli_error($conexion));
    
    $mostrar=mysqli_fetch_assoc($resultado);
?>
<div class="agregara">
        <form action="mproyecto.php?id=<?php echo $mostrar['id'];?>" method="post" id="mproyecto" class="formulario">
            <fieldset>
                <legend>Modificar proyecto</legend>

                    <div class="divs"><label for="nombreproyecto">Nombre</label><br>
                        <input type="text" name="nombrepro" id="nombrepro" value="<?php echo $mostrar['nombre']?>">
                    </div>

                    <div class="divs"><label for="descripcion">Descripción</label><br>
                        <textarea name="descripcionpro" id="descripcionpro" class="descripcionpro"><?php echo $mostrar['descripcion']?></textarea><br>
                        <input type="submit" class="agregar" id="modificarpr" value="Modificar">
                    </div>

                    <div class="divs">
                        <label for="fecha" class="labels">Fecha de entrega</label><br>
                        <input type="date" name="fechaen" id="fechaen" value="<?php echo $mostrar['fecha_entrega']?>">
                    </div>

            </fieldset>
        </form>
    </div>
</body>
</html>