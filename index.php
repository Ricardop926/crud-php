<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y Mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bd1113f22f.js" crossorigin="anonymous"></script>
  </head>
<body>
  <script>
    function eliminar(){

      var respuesta =confirm("estás seguro que deseas aliminar")
      return respuesta;
    }
  </script>


    <h1 class="text-center p-3" >Crud-php</h1>
    <! --llamar controlador de eliminar el id --> 
    <?php 
    include "modelo/conexion.php";
    include "controlador/eliminar_persona.php";



    ?>
       <div class="container-fuid row">

        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de personas</h3>
            <?php
        
            include "controlador/registro_persona.php"
             ?>
          
              
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nombre de la persona</label>
                <input type="text"  class="form-control" name="nombre">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">apellido de la persona</label>
                <input type="text" class="form-control" name="apellido">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">CC de la persona</label>
                <input type="number" class="form-control" name="cc">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Fecha de nacimiento</label>
                <input type="date"  class="form-control" name="fecha">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Correo</label>
                <input type="text"  class="form-control" name="correo">
              </div>
              
              
              <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            
          </form>
          <div class="col-8 p-3">
            <table class="table">
                <thead class="bg-info">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">CC</th>
                    <th scope="col">FECHA DE NAC</th>
                    <th scope="col">CORREO</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "modelo/conexion.php";
                  $sql=$conexion->query("select * from personas");
                  while($datos = $sql->fetch_object()) {?>

                  <tr>
                    <td><?=$datos-> id?></td>
                    <td><?=$datos-> NOMBRE?></td>
                    <td><?=$datos-> APELLIDOS?></td>
                    <td><?=$datos-> CC?></td>
                    <td><?=$datos-> FECHA_DE_NAC?></td>
                    <td><?=$datos-> CORREO?></td>
              
                    <td>
                        <a href="modificar_persona.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger>"><i class="fa-solid fa-trash"></i></a>
                    </td>
                  </tr>
                  
                <?php }
                  ?>
                  
                </tbody>
              </table>
          </div>

    </div>
  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>