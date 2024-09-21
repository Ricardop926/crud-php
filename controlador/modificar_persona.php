<?php
//validar boton 

if(!empty($_POST["btnmodificar"])){

    // para corroborar que el btón quedo bien se hace esto 
   // echo "hola el boton se oprimió";

   if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cc"])and  !empty($_POST["fecha"]) and !empty($_POST["correo"])){
        
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $cc = $_POST["cc"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];
        //llamar base de datos
        $sql=$conexion->query("update personas set NOMBRE='$nombre',APELLIDOS='$apellido',CC= $cc,FECHA_DE_NAC='$fecha',CORREO='$correo' WHERE id =$id ");
        if($sql ==1){

            //redirreciona despues de modificar a la tabla que esta en el index

            header("location:index.php");


        }else{
            echo '<div class ="alert alert-danger"> Error al modificar a la persona</div>';

        }


   }else{
       echo '<div class ="alert alert-warning"> Campos vacíos</div>';

   }

}


?>