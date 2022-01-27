<?php 
    include 'conexion_be.php';

    $nombre= $_POST['nombre'];
    $correo =  $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // algo pasa que no se inserta esta monda
    $query = "INSERT INTO usuarios(nombre,correo,usuario,contrasena) 
              VALUES('$nombre','$correo','$usuario','$contrasena')";

    $ejecutar = mysqli_query($conexion,$query);
    // sldasldadlalsslslsl
    // asdadaadaadad
    /// hola buenas
    // sdadasda
?>