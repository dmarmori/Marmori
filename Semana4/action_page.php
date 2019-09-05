<?php


//var_dump($_GET);

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

echo 'Su nombre es ',$nombre,' ',$apellido,'<br>';

echo 'Su nombre es '.$_GET['nombre'] . ' ' .$_GET['apellido'];//paraetros por GET

echo '<br>';
echo '<br>';

//$archivo = fopen('archivo.txt', 'a');
//fwrite($archivo, $_GET["nombre"]."\n");
//fwrite($archivo, $_GET["apellido"]."\n");
//fclose($archivo);

$MiObjeto = New stdClass();
$MiObjeto->nombre=$_GET['nombre'];
$MiObjeto->apellido=$_GET['apellido'];


var_dump(json_encode($MiObjeto));

$archivo = fopen('archivo.txt', 'a');

fwrite($archivo,json_encode($MiObjeto));
fclose($archivo);



?>