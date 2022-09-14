<?php

if(isset($_POST["registrar"])){
    if(!empty($_POST["Nombre"]) && !empty($_POST["ApellidoPaterno"]) && !empty($_POST["ApellidoMaterno"]) && !empty($_POST["NroAcompañante"]) && !empty($_POST["TipoHabitacion"]) && !empty($_POST["DiasAlojamiento"]) && !empty($_POST["ClaveCliente"]) && !empty($_POST["HabitacionesAdquiridas"]) && !empty($_POST["DNI"])){
        $nombre = $_POST["Nombre"];
        $ApellidoPaterno = $_POST["ApellidoPaterno"];
        $ApellidoMaterno = $_POST["ApellidoMaterno"];
        $NroAcompañante = $_POST["NroAcompañante"];
        $TipoHabitacion = $_POST["TipoHabitacion"];
        $DiasAlojamiento = $_POST["DiasAlojamiento"];
        $ClaveCliente = $_POST["ClaveCliente"];
        $HabitacionesAdquiridas = $_POST["HabitacionesAdquiridas"];
        $DNI = $_POST["DNI"];

        $sql =$conexion->query (" INSERT INTO  tcliente(Nombre,ApellidoPaterno,ApellidoMaterno,NroAcompañante,TipoHabitacion,DiasAlojamiento,ClaveCliente,HabitacionesAdquiridas,DNI) VALUES ('$nombre','$ApellidoPaterno','$ApellidoMaterno','$NroAcompañante','$TipoHabitacion','$DiasAlojamiento','$ClaveCliente','$HabitacionesAdquiridas','$DNI')");

     if($sql==1){
       echo '<div class="alert alert-success">cliente registrado</div>';
     }else{
       echo "no se pudo registrar";
     }
    }else{
       echo '<div class="alert alert-danger" role="alert"> los campos estan vacios </div>';
      
    }
   }
?>