<?php

$brand = array();
$art;
$tablaMarca = true;

function connect($query){
    $srv="localhost";
    $user="root";
    $passwd="";
    $db="ferreteriaag";
    $termineMarca = true;
    unset($GLOBALS['art']);
    $GLOBALS['art']=array();

    $link = mysqli_connect($srv,$user,$passwd,$db);

    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }
    
    if (mysqli_multi_query($link, $query)) {
        do {
            if ($result = mysqli_store_result($link)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if($GLOBALS['tablaMarca']) array_push($GLOBALS['brand'],$row);                    
                    else array_push($GLOBALS['art'],$row);
                }
                mysqli_free_result($result);
            }          
            $GLOBALS['tablaMarca']=false;
        } while (mysqli_next_result($link));        
    }
    mysqli_close($link);
 /*
    foreach($GLOBALS['brand'] as $values){
        foreach($values as $value){
            echo $value."<br/>";
        }
    }

    foreach($GLOBALS['art'] as $values){
        foreach($values as $value){
            echo $value."<br/>";
        }
    }
*/
}

?>