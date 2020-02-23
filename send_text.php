<?php
	ini_set('max_execution_time', 300); 
	$to = $_POST["emailf"];
	$subject = "Forgotten Password";
		
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: 1Devs. Inc. CRM'. "\r\n".
    'Reply-To: 1Devs. CRM'."\r\n" .
    'X-Mailer: PHP/' . phpversion();
		
	$message = '
	<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
				<button class="bttn button2"><a id="changea" style="text-decoration: none" href="http:// target="_blank">Click Me!</a></button>

</body>
</html>';
		
	mail($to, $subject, $message, $headers);
	header("Location: code_sent.php");
?>