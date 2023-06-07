<?php
include "conn.php";

$sql="select * from contactos;";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>Main</title>
</head>
<body style="background-color:#a5b1c2">
    
    <div class="container">
        <div class="row">
            <table class="table table-secondary table-striped table-responsive" style="margin-top: 20px;">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Direccion</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['apellido']?></td>
                        <td><?php echo $row['direccion']?></td>
                        <td><?php echo $row['correo']?></td>
                        <td><?php echo $row['telefono']?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-warning">Actualizar</a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
            </table>

            <div class="row">
                <div class="col-5">
                </div>
                <div class="col-5">
                    <a href="agregar.php" class="btn btn-primary">Agregar</a>
                </div>
                <div class="col-5">
                </div>
            </div>
        </div>
    </div>
</body>
</html>