<?php 
	include_once('../conf.php');
	
	// Envoi mail
	$to      = EMAIL_CONTACT;
    $subject = 'Cabinet Nadia - Nouveau contact';
    
    $message = 'Nouveau contact' . "\r\n\r\n" . 
    'Nom : .' . $_REQUEST['inputName'] . "\r\n" .
    'Email : .' . $_REQUEST['inputEmail'] . "\r\n" .
    'Sujet : .' . $_REQUEST['inputSubject'] . "\r\n" .
    'Message : .' . $_REQUEST['inputMessage'];

    $headers = 'From: '. $_REQUEST['inputEmail'] . "\r\n" .
    'Reply-To: ' . EMAIL_CONTACT . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if ( mail($to, $subject, $message, $headers) ) {
     	echo "ok";
    } else {
    	echo "error";
    }

?>