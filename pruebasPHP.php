<?php 
	include('accesoDB.php');
	$id_categoria=7;
    $marca="Tyrolit";
	$query = "SELECT `marca`.`marca` FROM `marca`,`articulo`,`categoria` WHERE `marca`.`id_marca`=`articulo`.`id_marca` AND `categoria`.`id_categoria`=".$id_categoria." GROUP BY `marca`.`marca`;";
	connect($query);
/*
    foreach($GLOBALS['brand'] as $values){
        foreach($values as $value){
            echo $value."<br/>";
        }
    }
*/
    foreach($GLOBALS['brand'] as $brandItem){
        echo $brandItem['marca'].'<br/>';
        $query = "SELECT `articulo`.`nombre`, `articulo`.`descripcion` FROM `articulo`,`categoria`,`marca` WHERE `articulo`.`id_categoria`=`categoria`.`id_categoria` AND `marca`.`id_marca`=`articulo`.`id_marca` AND `articulo`.`id_categoria`=".$id_categoria." AND `marca`.`marca`='".$brandItem['marca']."' ORDER BY `articulo`.`id_marca`;";
        connect($query);
        foreach($GLOBALS['art'] as $artItem){
            echo $artItem['nombre']." ".$artItem['descripcion']."<br/>";
        }
    }

/*
    foreach($GLOBALS['art'] as $values){        
        echo $values['nombre']." ".$values['descripcion']."<br/>";
    }
*/
?>