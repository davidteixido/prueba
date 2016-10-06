
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

	// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
//	$mensaje = wordwrap($mensaje, 70, "\r\n");

	/////////// configuración correos destinatarios
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
	Te agradecemos tu interés y que hayas contactado con nosotros.<br/><br/>
	En los próximos minutos nos pondremos en contacto contigo a través de alguno de los datos que nos has facilitado.<br/>
	¡Hasta ahora! 
	</p> 

	</body> 
	</html> 
	'; 

	//para el envío en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//dirección del remitente 
	$headers .= "From: piennsa | digital business <info@piennsa.com>\r\n"; 

	//dirección de respuesta, si queremos que sea distinta que la del remitente 
	$headers .= "Reply-To: info@piennsa.com\r\n"; 

	//ruta del mensaje desde origen a destino 
	$headers .= "Return-path: info@piennsa.com\r\n"; 

	//direcciones que recibián copia 
	//$headers .= "Cc: david@piennsa.com\r\n"; 

	//direcciones que recibirán copia oculta 
	//$headers .= "Bcc: david@piennsa.com\r\n"; 


mail($destinatario_seccion_contacto,$asunto,$cuerpo,$headers);



/*  mensaje notificación a piennsa  */

	//para el envío en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//dirección del remitente 
	$headers .= "From: piennsa | digital business <info@piennsa.com>\r\n"; 

	//dirección de respuesta, si queremos que sea distinta que la del remitente 
	$headers .= "Reply-To: info@piennsa.com\r\n"; 

	//ruta del mensaje desde origen a destino 
	$headers .= "Return-path: info@piennsa.com\r\n"; 



$msj = "Solicitud de contacto desde la web de piennsa (soluciones estratégicas)<br/><br/>";
$msj .= "De: <strong>".$nombre."</strong><br/>";
$msj .= "Email o teléfono: <strong>".$mailtel."</strong><br/>";
$msj .= "Fecha: <strong>".date("d-m-Y H:i:s")."</strong><br/>";
$msj .= "Café seleccionado: <strong>".$cafe."</strong><br/>";


// Enviarlo

mail($destinatario_piennsa, 'Nuevo contacto desde la web', $msj,$headers);

	
	
?>
