<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';	

$names=$_POST['names'];
$emails=$_POST['emails'];
$telephone=$_POST['telephone'];
$messages=$_POST['messages'];
$to = 'info@communityhospitallugoba.org';
    $subject = $names." Inquiry";
    $message = $messages." My phone number is ".$telephone;
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers = 'From:'.$emails. "\r\n" .
        'Reply-To: no-reply@communityhospitallugoba.org' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
	echo '<script type="application/javascript">';
				echo'alert("Message Sent");';
				echo'window.location.href="contact_us.html"';
				echo '</script>';
?>