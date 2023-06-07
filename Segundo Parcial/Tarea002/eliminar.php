<?php
include 'conn.php';
$id=$_GET["id"];
$sql="DELETE from contactos WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('Datos eliminados correctamente');</script>";
}else{
    echo "<script>alert('Error al eliminar!');</script>";
}

echo "<script>window.location.href='index.php'</script>";
?>