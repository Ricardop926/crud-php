<?php 

include "modelo/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query(" select * from personas where id=$id ")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

        <form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secondary">Modificar personas</h3>
    
            <input type="hidden" name="id" value="<?=$_GET["id"] ?>">
            <?php

            //llamado del controlador
            include "controlador/modificar_persona.php";

            //recorrer los datos
            while($datos=$sql->fetch_object()){?>

                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nombre de la persona</label>
                <input type="text"  class="form-control" name="nombre" value="<?=$datos-> NOMBRE?>">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">apellido de la persona</label>
                <input type="text" class="form-control" name="apellido" value="<?=$datos-> APELLIDOS?>">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">CC de la persona</label>
                <input type="number" class="form-control" name="cc" value="<?=$datos-> CC?>">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Fecha de nacimiento</label>
                <input type="date"  class="form-control" name="fecha" value="<?=$datos-> FECHA_DE_NAC?>">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Correo</label>
                <input type="text"  class="form-control" name="correo" value="<?=$datos-> CORREO?>">
              </div>


            <?php }

 ?>
          
              <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar</button>
            
          </form>
    
</body>
</html>