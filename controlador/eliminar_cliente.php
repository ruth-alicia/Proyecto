<?php
if(isset($_GET["id"])){
    $idCliente=$_GET["id"];
    $sql=$conexion->query("DELETE from tcliente where idCliente=$idCliente");
    if($sql==1){
        header("location:index1.php");
      }else{
        echo "no se pudo eliminar";
      }
}
?>