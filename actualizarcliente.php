<?php
include "modelo/conexion.php";
$idCliente = $_GET["id"];
$sql=$conexion->query("select * from tcliente where idCliente=$idCliente");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/all.min.js"></script>
</head>
<body>
    <form class="col-4 px-5 m-auto" action="" method="POST">
        <?php 
        include "controlador/actualizar_cliente.php";
        ?>
        <h3>Actualizar Cliente</h3>
        <input type="text" name="idCliente" hidden value="<?= $_GET["id"]?>">
        <?php
        while($datos=$sql->fetch_object()){
        ?>
        <div class="mb-3">
        <label  class="form-label">Nombres</label>
                <input type="text" class="form-control" name="Nombre" value="<?= $datos->Nombre?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="ApellidoPaterno" value="<?= $datos->ApellidoPaterno?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="ApellidoMaterno" value="<?= $datos->ApellidoMaterno?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Numero de Acompañante</label>
                <input type="text" class="form-control" name="NroAcompañante" value="<?= $datos->NroAcompañante?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Tipo de Habitacion</label>
                <input type="text" class="form-control" name="TipoHabitacion" value="<?= $datos->TipoHabitacion?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Dias de Alojamiento</label>
                <input type="text" class="form-control" name="DiasAlojamiento" value="<?= $datos->DiasAlojamiento?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Clave Cliente</label>
                <input type="password" class="form-control" name="ClaveCliente" value="<?= $datos->ClaveCliente?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Habitaciones Adquiridas</label>
                <input type="text" class="form-control" name="HabitacionesAdquiridas" value="<?= $datos->HabitacionesAdquiridas?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Numero de DNI</label>
                <input type="number" ondrop="return false;" onpaste="return false;" name="DNI" value="<?= $datos->DNI?>">
                </div>
        <?php
        }
        ?>
            <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
        </form>
</body>
</html>