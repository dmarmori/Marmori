


<!DOCTYPE html>
<html>
<body>

<h2>Listado de usuarios</h2>

<ol>
	<?php
$miarchivo = fopen("usuarios.txt", "r") or die("Unable to open file!");
while(!feof($miarchivo)) {
  $objeto=json_decode(fgets($miarchivo));
  
  if(objeto->Usuario==$_GET['Usuario']) and (objeto->Contraseña==$_GET['Contraseña']);

{



}





}




fclose($miarchivo);
?>

</ol> 

</body>
</html>
