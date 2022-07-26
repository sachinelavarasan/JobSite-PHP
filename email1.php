<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
session_start();

if(isset($_POST['submit']))
{
	$emailto="sachinrdj321@gmail.com";
	$mess=$_POST['message'];
	$name=$_POST['name'];
	$ema=$_POST['email'];
	
	
	if(isset($_SESSION["email"]))
	{
$mail = new PHPMailer(true);

try {
                           
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'sachinrdj321@gmail.com';                     
    $mail->Password   = 'sachin321';
    $mail->SMTPSecure = 'tls';
    $mail->Port= 587;

    $mail->setFrom('sachinrdj321@gmail.com', 'Mailer');
    $mail->addAddress($emailto);     
    $mail->addReplyTo('sachinrdj321@gmail.com', 'No-reply');
    

     
    $mail->isHTML(true);                                
    $mail->Subject = $ema;
    $mail->Body    = $mess;
    
    $mail->send();
     echo "<script>alert('message sent'); window.location = 'index1.php'</script>";
    
} catch (Exception $e) {
    echo "<script>alert('message cannot send'); window.location = 'index1.php'</script>";
   
}

}
else{
    echo "<script>alert('check Your username'); window.location = 'reset.php'</script>";
}
}
?>

