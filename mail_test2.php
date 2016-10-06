
<?php
        error_reporting(E_ALL);
	ini_set("display_errors",1);
        
        date_default_timezone_set('Europe/Madrid');
	

	// Si cualquier l�nea es m�s larga de 70 caracteres, se deber�a usar wordwrap()
//	$mensaje = wordwrap($mensaje, 70, "\r\n");

	/////////// configuraci�n correos destinatarios
	$destinatario_seccion_contacto = "tecnian@tecnian.com"; 
	$destinatario_piennsa = "tecnian@tecnian.com";


	$asunto = "test3"; 
	$cuerpo = 'test3'; 

	//para el env�o en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//direcci�n del remitente 
	$headers .= "From: piennsa\r\n"; 

	//direcci�n de respuesta, si queremos que sea distinta que la del remitente 
	//$headers .= "Reply-To: info@piennsa.com\r\n"; 

	//ruta del mensaje desde origen a destino 
	//$headers .= "Return-path: info@piennsa.com\r\n"; 

	//direcciones que recibi�n copia 
	//$headers .= "Cc: david@piennsa.com\r\n"; 

	//direcciones que recibir�n copia oculta 
	//$headers .= "Bcc: david@piennsa.com\r\n"; 


mail($destinatario_seccion_contacto,$asunto,$cuerpo,$headers);



	
	
?>
