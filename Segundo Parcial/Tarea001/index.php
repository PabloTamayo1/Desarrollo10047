<!-- Archivo PHP que contenga el formulario de inicio de sesión y la lógica de autenticación.
Archivo PHP que maneje la creación y gestión de sesiones.
Archivo PHP que muestre la página de inicio después de la autenticación exitosa. -->

<?php  
session_start();

if(!$_SESSION['PERMISO']==true){
    header('Location: login.php');   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <h2>Has iniciado sesion de manera exitosa</h2>
</head>
<body>
    
</body>
</html>


