<!DOCTYPE html>
<html>
<body> 

<h2>Listado de usuarios</h2>

<ol>
	<?php
$miArchivo = fopen("usuarios.txt", "r") or die("NO AMIGO ESTA MAL EL CODIGO");
while(!feof($miArchivo)) 
{
  $objeto=json_decode(fgets($miArchivo));
  echo "<li>".$objeto->nombre."</li>";
}
fclose($miArchivo);

?>
</ol> 

</body>
</html>