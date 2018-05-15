<?php
$destino="vanessa_fenis_love@rocketmail.com";
$Nombre=$_POST["Nombre"];
$Correo=$_POST["Correo"];
$Telefono=$_POST["Telefono"];
$Mensaje=$_POST["Mensaje"];
$Contenido="Nombre: ". $Nombre . "\nCorreo: " . $Correo . "\nTelefono: " , $Telefono ."\nMensaje: " . $mensaje;
mail($destino,"Contacto",$Contenido);
header("Location:contacto.html")
?>

