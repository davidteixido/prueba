
<?php

	if(isset($_POST['nombre'])){
	    $nombre = $_POST['nombre'];
	}
	if(isset($_POST['mailtel'])){
	    $mailtel = $_POST['mailtel'];
	}
	if(isset($_POST['cafe'])){
	    $cafe = $_POST['cafe'];
	}
	if(isset($_POST['seccion'])){
	    $seccion = $_POST['seccion'];
	}

	// Si cualquier l�nea es m�s larga de 70 caracteres, se deber�a usar wordwrap()
//	$mensaje = wordwrap($mensaje, 70, "\r\n");

	/////////// configuraci�n correos destinatarios
	$destinatario_seccion_contacto = "info@piennsa.com"; 
	$destinatario_piennsa = "info@piennsa.com";


	$asunto = "Marchando $cafe!! desde seccion $seccion"; 
	$cuerpo = ' 
	<html> 
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />       
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL="www.ounik.com"">
	   <title>Midatt</title> 
	</head> 
	<body> 
	<h1>Marchando '. $cafe .'!!</h1> 
	<p> 
	Te agradecemos tu inter�s y que hayas contactado con nosotros.<br/><br/>
	En los pr�ximos minutos nos pondremos en contacto contigo a trav�s de alguno de los datos que nos has facilitado.<br/>
	�Hasta ahora! 
	</p> 

	</body> 
	</html> 
	'; 

	//para el env�o en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//direcci�n del remitente 
	$headers .= "From: piennsa |�digital business <info@piennsa.com>\r\n"; 

	//direcci�n de respuesta, si queremos que sea distinta que la del remitente 
	$headers .= "Reply-To: info@piennsa.com\r\n"; 

	//ruta del mensaje desde origen a destino 
	$headers .= "Return-path: info@piennsa.com\r\n"; 

	//direcciones que recibi�n copia 
	//$headers .= "Cc: david@piennsa.com\r\n"; 

	//direcciones que recibir�n copia oculta 
	//$headers .= "Bcc: david@piennsa.com\r\n"; 


mail($destinatario_seccion_contacto,$asunto,$cuerpo,$headers);



/*  mensaje notificaci�n a piennsa  */

	//para el env�o en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//direcci�n del remitente 
	$headers .= "From: piennsa |�digital business <info@piennsa.com>\r\n"; 

	//direcci�n de respuesta, si queremos que sea distinta que la del remitente 
	$headers .= "Reply-To: info@piennsa.com\r\n"; 

	//ruta del mensaje desde origen a destino 
	$headers .= "Return-path: info@piennsa.com\r\n"; 



$msj = "Solicitud de contacto desde la web de piennsa (soluciones estrat�gicas)<br/><br/>";
$msj .= "De: <strong>".$nombre."</strong><br/>";
$msj .= "Email o tel�fono: <strong>".$mailtel."</strong><br/>";
$msj .= "Fecha: <strong>".date("d-m-Y H:i:s")."</strong><br/>";
$msj .= "Caf� seleccionado: <strong>".$cafe."</strong><br/>";


// Enviarlo

mail($destinatario_piennsa, 'Nuevo contacto desde la web', $msj,$headers);

	
	
?>
