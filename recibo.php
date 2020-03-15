<?php 
$nombre=$_POST["nombre"];
$asunto=$_POST["asunto"];
$tel=$_POST["tel"];
$correo=$_POST["correo"];
$mensaje=$_POST["mensaje"];

echo "<h2>Información recibida desde PHP</h2>";
echo "El nombre recibido es:". $nombre . "<br/>";
echo "El asunto recibido es:". $asunto . "<br/>";
echo "El tel recibido es:". $tel . "<br/>";
echo "El correo recibido es:". $correo . "<br/>";
echo "El mensaje recibido es:". $mensaje . "<br/>";

 ?>

