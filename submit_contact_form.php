<?php
require("class.phpmailer.php");
require("class.smtp.php");
require("phpmailer.lang-en.php");



?>


















<?php


$name = $_POST['name'];
$from_email = $_POST['email'];
$msg = $_POST['msg'];
$subject = $_POST['sub'];

	$to = "info@swasthmantra.com";
	$message = '<html><head>';
	$message.='<title>Swasth Mantra</title>';
	$message.='<style>';
	$message.='.detail{';
	$message.='color:#323232;';
	$message.='border:1px solid #F2EEEE;';
	$message.='padding:10px;';
	$message.='border-radius: 5px;';
	$message.='}';
	$message.='</style>';
	$message.='</head><body>';
	$message.='<p>Enquiry Details Form</p>';
	$message.='<br>';
	$message.='<table>';
	$message.='<tr>';
	$message.='<td><b>Name : </b></td>';
	$message.='<td>'.$name.'</td>';
	$message.='</tr>';
	$message.='<tr>';
	$message.='<td><b>From : </b></td>';
	$message.='<td>'.$from_email.'</td>';
	$message.='</tr>';
	$message.='</table><br>';
	$message.='<p class="detail">'.$msg.'</p><br>';
	$message.='<p>Email sent from '.'<b>'.$from_email.'</b>'.'</p>';
	$message.='</body>';
	$message.='</html>';
	
	// Always set content-type when sending HTML email
	/*$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	//$headers .= 'From: <'.$from_email. '>'. "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";*/
	/*$headers='';

	$headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";  */
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	$status = mail($to,$subject,$message,$headers);
	if($status){
		echo 1;
	}
	else{
		echo 0;
	}

?>