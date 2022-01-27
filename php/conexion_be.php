<?php

    $conexion = mysqli_connect("localhost","root","1234","login_register_db");


    
    //Just for checking
    if($conexion){
        echo 'Conexion satisfactoria con la base de datos';
    }
    else{
        echo 'No se ha podido establecer conexion con la base de datos';
    }
    

?>