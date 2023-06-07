<?php
include "conn.php";

$id=$_GET["id"];
$sql="SELECT * FROM contactos WHERE id='".$id."'";
$resultado=$conn->query($sql);
while($row=mysqli_fetch_array($resultado)){

    ?>
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
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']?>">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']?>">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido:</label>
                            <input type="text" class="form-control" name="apellido" value="<?php echo $row['apellido']?>">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección:</label>
                            <input type="text" class="form-control" name="direccion" value="<?php echo $row['direccion']?>">
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo electrónico:</label>
                            <input type="email" class="form-control" name="correo" value="<?php echo $row['correo']?>">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono:</label>
                            <input type="text" class="form-control" name="telefono" value="<?php echo $row['telefono']?>">
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
    <?php }?>
    
    
    <?php
    
    if(isset($_POST['id']) ||isset($_POST['nombre']) || isset($_POST['apellido']) || isset($_POST['direccion']) || isset($_POST['correo'])|| isset($_POST['telefono'])){
      $idp=$_POST['id'];
      $nombre=$_POST["nombre"];
      $apellido=$_POST["apellido"];
      $direccion=$_POST["direccion"];
      $correo=$_POST["correo"];
      $telefono=$_POST["telefono"];
      $sql2="UPDATE contactos SET nombre='".$nombre."', apellido='".$apellido."', direccion='".$direccion."', correo='".$correo."', telefono='".$telefono."' WHERE id='".$idp."'"; 
      $conn->query($sql2);
      /*if($nombre=1){
        header("Location:index.php");
      }*/
      if(mysqli_query($conn,$sql)){
        echo "<script>alert('Datos actualizados correctamente');</script>";
        echo "<script>window.location.href='index.php'</script>";
        }else{
            echo "Error al guardar!";
        }  
    
    }
    ?>
    
    <!--Links de bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
