<?php
include_once 'conn.php';

if(isset($_POST['nombre']) || isset($_POST['apellido']) || isset($_POST['direccion']) || isset($_POST['correo'])|| isset($_POST['telefono'])){
  $nombre=$_POST["nombre"];
  $apellido=$_POST["apellido"];
  $direccion=$_POST["direccion"];
  $correo=$_POST["correo"];
  $telefono=$_POST["telefono"];
  $sql="INSERT INTO contactos(nombre,apellido,direccion,correo,telefono) VALUES ('$nombre','$apellido','$direccion','$correo','$telefono')";
  $conn->query($sql);
  /*if($nombre=1){
    header("Location:index.php");
  }*/

  if(mysqli_query($conn,$sql)){
    echo "<script>alert('Datos guardados correctamente');</script>";
    echo "<script>window.location.href='index.php'</script>";
    }else{
        echo "Error al guardar!";
    }  
}
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

    <title>Agregar</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
                <br>
                <div class="card">
                    <div class="card-header">
                        Nuevo usuario
                    </div>
                    <div class="card-body">
                        <form method="POST">
                        <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido:</label>
                            <input type="text" class="form-control" name="apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección:</label>
                            <input type="text" class="form-control" name="direccion" required>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo:</label>
                            <input type="email" class="form-control" name="correo" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono:</label>
                            <input type="text" class="form-control" name="telefono" required>
                        </div>
                            <button type="submit" class="btn btn-primary"  value="Guardar">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>
</body>
</html>