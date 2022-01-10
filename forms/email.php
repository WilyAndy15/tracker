<?php
	$to = "sistemas@tracker.com.ec";
	$subject = "Tracker 2.0 - Info";
	$body = "<p><strong>".date("F j, Y, g:i a")."</strong></p>";
	$body .= "<p><strong>Nombre:</strong> ".$_POST['nombre']."<br/>";
	$body .= "<strong>Ciudad:</strong> ".$_POST['ciudad']."<br/>";
	$body .= "<strong>Direccion:</strong> ".$_POST['direccion']."<br/>";
	$body .= "<strong>Telefono:</strong> ".$_POST['telefono']."<br/>";
	$body .= "<strong>Email:</strong> ".$_POST['email']."<br/>";
	$body .= "<strong>Comentario:</strong> ".$_POST['comentario']."</p>";
 	$headers .= "Content-type: text/html\r\n"; 
	if (mail($to, $subject, $body, $headers)) {
		echo("<script>setTimeout(\"location.href='index.html'\",1000)</script>");
		echo("<script>alert('Su correo se ha enviado exitosamente')</script>");
		
	} else {
		echo("<script>alert('No se ha podido enviar su información')</script>");
		echo("<script>setTimeout(\"location.href='index.html'\",1000)</script>");
	}
?>