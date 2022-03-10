<?php

$brand = array();
$art;

function connect($query){
    $srv="localhost";
    $user="root";
    $passwd="";
    $db="ferreteriaag";
    $primeraTabla = true;
    $termineMarca = true;

    $link = mysqli_connect($srv,$user,$passwd,$db);

    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }
    
    if (mysqli_multi_query($link, $query)) {
        do {
            if ($result = mysqli_store_result($link)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if($primeraTabla) {
                        $GLOBALS['art'] = array();
                        array_push($GLOBALS['brand'],$row);
                    }
                    else {
                        array_push($GLOBALS['art'],$row);
                    }
                }
                $termineMarca=false;
                mysqli_free_result($result);
            }          
            $primeraTabla=false;
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