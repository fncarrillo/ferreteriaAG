<?php

$local="localhost";
$user="admin";
$passwd="";
$db="ferreteriaag";

$mysqli = new mysqli($srv,$user,$passwd,$db);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

?>