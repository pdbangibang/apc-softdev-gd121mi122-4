<?php
 
$to = "marktroi@localhost.com";
$subject = $_GET['yoursubject'];
$body= "test" .PHP_EOL;
$body = "from: " . $_GET['youremail'] . "\n\n" . $_GET['InputMessage'] .PHP_EOL;
$headers = "from: demo@localhost";

if (mail($to, $subject, $body, $headers))
{
	function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

Redirect('contact', false);
	
	echo("sent");
} else {
	echo("Fail");
}
?>