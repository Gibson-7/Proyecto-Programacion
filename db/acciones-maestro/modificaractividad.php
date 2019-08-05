<?php
    include_once("../../conexion.php");

    $sqlo = "SELECT * FROM proyecto ORDER BY nombre ASC";
    $resultado = $conexion->query($sqlo);

?>

<html>
<body>
<?php
    $id=$_REQUEST['id'];//Guarda el id

    $ssql = "SELECT * FROM actividad WHERE id = '$id'"; //Realiza la consulta
    
    $resultados = mysqli_query($conexion,$ssql); //Guarda la consulta
    
    $mostrar=mysqli_fetch_assoc($resultados);
?>
    <div class="agregara">
        <form action="mactividad.php?id=<?php echo $mostrar['id'];?>" method="post" class="formulario"><!--Envía los datos con el respectivo id-->
            <fieldset>
                <legend>Modificar actividad</legend>

                    <div class="divs">
                        <label for="nombreactividad">Nombre</label><br>
                        <input type="text" name="nombreactividad" id="nombreactividad" value="<?php echo $mostrar['nombre']?>"><!--Muestra el dato
                        con ayuda del echo dentro del value-->
                    </div>

                    <div class="divs">
                        <label for="descripcion">Descripción</label><br>
                        <textarea name="descripcionact" id="descripcionact"><?php echo $mostrar['descripcion']?></textarea><br>
                        <input type="submit" class="agregar" id="modificaract" value="Modificar">
                    </div>

                    <div class="divs">
                        <label for="actividadproyecto">Proyecto</label><br>
                        <select name="proyectoact" id="proyectoact" class="proyectoact">     
                        <option value ="">Seleccione...</option>
                        <?php WHILE ($rows = $resultado->fetch_assoc()){ ?><!--Permite guardar la información dentro de un arreglo-->
                        <option value="<?php echo $rows['id']; ?>"><?php echo $rows['nombre'] ?>
                        </option>
                        <?php } ?>       
                        </select>
                    </div>
        
            </fieldset>
        </form>
    </div>
</body>
</html>