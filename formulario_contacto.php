<?php
$nombre_form=$_POST['nombre'];
$mail_form=$_POST['mail'];
$mensaje_form=$_POST['mensaje'];
$referido_form=$_POST['referido'];

$cuerpo_mail="Nombre: ".$nombre_form."\r\n"."Correo electrónico: ".$mail_form."\r\n"."Mensaje: ".$mensaje_form."\r\n"."Referido: ".$referido_form;

$respuesta="From:$nombre_form <$mail_form>";

mail("francolinoarte@gmail.com", "Contacto desde Web", $cuerpo_mail, $respuesta);

$datos_conexion=mysqli_connect("localhost", "id12397109_viviana", "i!uraUrZ=C7iL)]<", "id12397109_francolinoarte") or die ("No se puede conectar con la base de datos");
mysqli_query($datos_conexion, "INSERT INTO registro_contacto VALUES (DEFAULT, '$nombre_form', '$mail_form', '$mensaje_form', '$referido_form')");

header("Location: mensaje_enviado.php");
?>