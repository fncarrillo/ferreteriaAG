<?php

$articulos;

function connect($query){
    $srv="localhost";
    $user="root";
    $passwd="";
    $db="ferreteriaag";   

    unset($GLOBALS['articulos']);
    $GLOBALS['articulos']=array();

    $link = mysqli_connect($srv,$user,$passwd,$db);

    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }

    if ($resultado = mysqli_query($link,$query)){
        while ($row = mysqli_fetch_assoc($resultado)) {
            array_push($GLOBALS['articulos'],$row);
        }
    }

    mysqli_close($link);

}

?>