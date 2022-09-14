<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index1.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/all.min.js"></script>
</head>
<body class="imgOne">
<script>
          function eliminar(){
            var respuesta=confirm("seguro que desea eliminar?");
            return respuesta;
        }
    </script>

    <h1 class="text-center">Pagina principal</h1>
    <div class="container-fluid row">
        <form class="col-4 px-5" action="" method="POST">
            <h3>Registro de clientes</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/registrar_cliente.php";
            ?>
            <div class="mb-3">
                <label  class="form-label">Nombres</label>
                <input type="text" class="form-control" name="Nombre">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="ApellidoPaterno">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="ApellidoMaterno">
            </div>
            <div class="mb-3">
                <label  class="form-label">Numero de Acompañante</label>
                <input type="text" class="form-control" name="NroAcompañante">
            </div>
            <div class="mb-3">
                <label  class="form-label">Tipo de Habitacion</label>
                <input type="text" class="form-control" name="TipoHabitacion">
            </div>
            <div class="mb-3">
                <label  class="form-label">Dias de Alojamiento</label>
                <input type="text" class="form-control" name="DiasAlojamiento">
            </div>
            <div class="mb-3">
                <label  class="form-label">Clave Cliente</label>
                <input type="password" class="form-control" name="ClaveCliente">
            </div>
            <div class="mb-3">
                <label  class="form-label">Habitaciones Adquiridas</label>
                <input type="text" class="form-control" name="HabitacionesAdquiridas">
            </div>
            <div class="mb-3">
                <label  class="form-label">Numero de DNI</label>
                <input type="number" ondrop="return false;" onpaste="return false;" name="DNI">
            </div>
            <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
        </form>
        <div class="col-8">
        <?php
            include "controlador/eliminar_cliente.php";
            ?>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Numero de Acompañante</th>
                <th scope="col">Tipo de Habitacion</th>
                <th scope="col">Dias de Alojamiento</th>
                <th scope="col">Clave Cliente</th>
                <th scope="col">Habitaciones Adquiridas</th>
                <th scope="col">DNI</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("SELECT * FROM `tcliente`");
                    while($datos=$sql->fetch_object()){
                ?>
                    <tr class="datosIn">
                        <td><?= $datos->idCliente ?></td>
                        <td><?= $datos->Nombre ?></td>
                        <td><?= $datos->ApellidoPaterno ?></td>
                        <td><?= $datos->ApellidoMaterno ?></td>
                        <td><?= $datos->NroAcompañante ?></td>
                        <td><?= $datos->TipoHabitacion ?></td>
                        <td><?= $datos->DiasAlojamiento ?></td>
                        <td><?= $datos->ClaveCliente ?></td>
                        <td><?= $datos->HabitacionesAdquiridas ?></td>
                        <td><?= $datos->DNI ?></td>
                        <td>
                        <a href="actualizarcliente.php?id=<?= $datos->idCliente ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a onclick="return eliminar()" href="index1.php?id=<?= $datos->idCliente ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>