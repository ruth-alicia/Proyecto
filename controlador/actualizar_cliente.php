<?php

if(isset($_POST["registrar"])){
    if(!empty($_POST["Nombre"]) && !empty($_POST["ApellidoPaterno"]) && !empty($_POST["ApellidoMaterno"]) && !empty($_POST["NroAcompañante"]) && !empty($_POST["TipoHabitacion"]) && !empty($_POST["DiasAlojamiento"]) && !empty($_POST["ClaveCliente"]) && !empty($_POST["HabitacionesAdquiridas"]) && !empty($_POST["DNI"])){
        $idCliente=$_GET["id"];
        $nombre = $_POST["Nombre"];
        $ApellidoPaterno = $_POST["ApellidoPaterno"];
        $ApellidoMaterno = $_POST["ApellidoMaterno"];
        $NroAcompañante = $_POST["NroAcompañante"];
        $TipoHabitacion = $_POST["TipoHabitacion"];
        $DiasAlojamiento = $_POST["DiasAlojamiento"];
        $ClaveCliente = $_POST["ClaveCliente"];
        $HabitacionesAdquiridas = $_POST["HabitacionesAdquiridas"];
        $DNI = $_POST["DNI"];
        $sql=$conexion->query("UPDATE tcliente SET Nombre='$nombre',ApellidoPaterno='$ApellidoPaterno',ApellidoMaterno='$ApellidoMaterno',NroAcompañante='$NroAcompañante',TipoHabitacion='$TipoHabitacion', DiasAlojamiento='$DiasAlojamiento' , ClaveCliente='$ClaveCliente' ,HabitacionesAdquiridas='$HabitacionesAdquiridas' WHERE idCliente=$idCliente");

        if($sql==1){
            header("location:index1.php");
          }else{
            echo "no se pudo registrar";
          }
         }else{
            echo "los campos estan vacios";
         }
        }
    
    ?>