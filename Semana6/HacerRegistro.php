<?php
$miobjeto=new stdClass();
$miobjeto->Usuario=$_GET['Usuario'];
$miobjeto->Contraseña=$_GET['Contraseña'];

$archivo=fopen('usuariosRegistro.txt','a');
fwrite($archivo,json_encode($miobjeto)."\n");
fclose($archivo);
?>