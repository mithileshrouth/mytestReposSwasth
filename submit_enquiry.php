<?php 

require("class.phpmailer.php");
require("class.smtp.php");
require("phpmailer.lang-en.php");

  $name = $_POST['name'];
  $contact = $_POST['contactno'];
  $from_email = $_POST['email'];
  $enqDetail = $_POST['enqdetail'];
  
 
 $subject = "Enquiry";
 
 $mail = new PHPMailer();
 $mail->IsSMTP();                                     
 $mail->Host = "swasthmantra.com";  
 $mail->SMTPAuth = false;     

	$mail->From = $from_email;
	$mail->FromName = $name;
	
	$mail->AddAddress("contact@swasthmantra.com", "Swasth Mantra");
	//$mail->AddAddress("contact@swasthmantra.com", "Swasth Mantra");


	$mail->WordWrap = 50;                             
	$mail->IsHTML(true);                            
	$mail->Subject = $subject;

	
	
	

	$message = '<html><head>';
	$message.='<title>'.$subject.'</title>';
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
	$message.='<tr>';
	$message.='<td><b>Contact No : </b></td>';
	$message.='<td>'.$contact.'</td>';
	$message.='</tr>';
	$message.='</table><br>';
	$message.='<p class="detail">'.$enqDetail.'</p><br>';
	$message.='<p>Email sent from '.'<b>'.$from_email.'</b>'.'</p>';
	$message.='</body>';
	$message.='</html>';
	
	
	$mail->Body = $message;
	

if(!$mail->Send())
   {
//	   $m="No";
	  /* $m=$mail->ErrorInfo;
	   echo $m;*/
	   echo 0;
	  // return $m;
   }
   else
   {
	   /*$m="Message has been sent";
	     echo $m;*/
	   //return $m;
	   echo 1;
	   
   }
?>