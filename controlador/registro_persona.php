<?php

if(!empty($_POST["btnregistrar"])){

    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cc"])and  !empty($_POST["fecha"]) and !empty($_POST["correo"])){
     
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $cc = $_POST["cc"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        // llamar la conexión

        $sql=$conexion->query("insert into personas(NOMBRE,APELLIDOS,CC,FECHA_DE_NAC,CORREO) VALUES('$nombre','$apellido', $cc,'$fecha','$correo')");
        if($sql==1){

            echo '<div class ="alert alert-success"> Persona registrda correctamente</div>';
        } else{

            echo '<div class ="alert alert-danger"> Error al registrada persona</div>';
        }



    } else {

        echo '<div class ="alert alert-warning"> Alguno de los campos está vacío </div>';
    }
}

?>