<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include("connect.php");

if(isset($_POST['submit']))
{
	$emailto=$_POST['email'];
	$code=uniqid(true);
	$que="select * from register where email='$emailto'";
	$quer=mysqli_query($con,$que);
	if(mysqli_num_rows($quer)>0)
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
    

     $url="http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/reset.php?email=$emailto";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = "<h1>your account reset password link</h1><br><a href=' $url'>Password reset Link</a>";
    
    $mail->send();
     echo "<script>alert('password reset link send to your email account $emailto'); window.location = 'index.php'</script>";
    
} catch (Exception $e) {
    echo "<script>alert('reset link could not be sent please try after . {$mail->ErrorInfo}'); window.location = 'index.php'</script>";
   
}

}
else{
    echo "<script>alert('check Your username'); window.location = 'reset.php'</script>";
}
}
?>

