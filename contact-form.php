<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'atendimento@pegadoseguros.com.br';  

	// prepare message 
	$body = "Você recebeu um novo email do seu website de Consultor :
	
	Name:  $_POST[name]
	Phone Number:  $_POST[number]
	Email:  $_POST[email]
	Message:  $_POST[message]";

	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Message from Blussom', $body, $headers );

}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Obrigado!</title>
</head>
<body>
<p> Obrigada! Nós entraremos em contato com você em breve</p>
</body>
</html>