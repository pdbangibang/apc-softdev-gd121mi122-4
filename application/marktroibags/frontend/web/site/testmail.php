<?php
 
$to = "marktroi@localhost.com";
$subject = $_GET['yoursubject'];
$body= "test" .PHP_EOL;
$body = "from: " . $_GET['youremail'] . "\n\n" . $_GET['InputMessage'] .PHP_EOL;
$headers = "from: demo@localhost";

if (mail($to, $subject, $body, $headers))
{

	echo("sent");
} else {
	echo("Fail");
}
?>