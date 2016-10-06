
<?php

        error_reporting(E_ALL);
	ini_set("display_errors",1);    
        
        date_default_timezone_set('Europe/Madrid');
        
        
        include("class.phpmailer.php");


	

        //$destinatario_seccion_contacto = "info@piennsa.com";
	//$destinatario_piennsa = "info@piennsa.com";
        
        $destinatario_seccion_contacto = "tecnian@tecnian.com";
	$destinatario_piennsa = "info@piennsa.com";

        
	$asunto = "testG";
	$cuerpo = 'TESTG'; 

       
                $_mail = new PHPMailer();
                
                //$_mail->IsSMTP();
                //$_mail->SMTPAuth = true;
                //$_mail->Host = "mail.binbox.es";
                
                
                //$_mail->Username = "piennsa@binbox.es";
                //$_mail->Password = "Rup@q921";
                $_mail->From = "info@piennsa.com";
                
                $_mail->FromName = 'Piennsa';
                $_mail->Subject = "TEST EMAIL";
                $_mail->Body = "Mensaje enviado";                
                $_mail->IsHTML (true);
                $_mail->ClearAllRecipients();
                
                $_mail->AddAddress($destinatario_seccion_contacto);
                //$_mail->AddAddress($destinatario_piennsa);
                
                

    
    /*$_mail = new PHPMailer();
    $_mail->CharSet = "iso-8859-1";
    $_mail->From = 'info@piennsa.com';
    $_mail->FromName = 'piennsa |digital business';
    $_mail->Subject = $asunto;
    $_mail->Body = $cuerpo;
    //$_mail->IsSMTP();
    $_mail->IsHTML (true);
    $_mail->AddAddress($destinatario_seccion_contacto);*/
    
    //$_mail->Send();

                if ($_mail->Send())
                {
                    $msg = "OK";
                }
                else
                {
                    $msg = $_mail->ErrorInfo;
                }

                echo $msg;



	
?>
