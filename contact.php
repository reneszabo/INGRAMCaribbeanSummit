<?php

require 'lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "ingramcaribbeansummit2015@verlas.com.ve";
$mail->Password = "ingram123";
$mail->setFrom('ingramcaribbeansummit2015@verlasinc.com', 'Ingram Caribbean Summit 2015');
$mail->addReplyTo('ingramcaribbeansummit2015@verlasinc.com', 'Ingram Caribbean Summit 2015');
//$mail->addAddress('ingramcaribbeansummit2015@verlasinc.com', 'Ingram Caribbean Summit 2015');
$mail->addAddress('ingramcaribbeansummit2015@verlasinc.com', 'Ingram Caribbean Summit 2015');
$mail->Subject = 'Contact Form';

$name = $_POST['name'];
$message = $name . " wrote the following: " . "\n\n" . $_POST['message'] . "\n\n" . $_POST['email'];

//body
$mail->msgHTML($message);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
  echo "<script type='text/javascript'>
        alert('Sorry but your message could not be sent, try again later!');
        window.location.assign('index.html');
        </script>";
} else {
    echo "<script type='text/javascript'>
        alert('Thank you for contact us!');
        window.location.assign('index.html');
        </script>";
}

/*if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) ) {

  $to = "ingramcaribbeansummit2015@verlasinc.com";
  
  $name = $_POST['name'];
  $subject = "Contact Form";
  $message = $name . " wrote the following: " . "\n\n" . $_POST['message'] . "\n\n" . $_POST['email'];
  $headers = "From: Ingram"."\r\n" . "Reply-To: Ingram"."\r\n";
  mail($to, $subject, $message, $headers);
  
} else {

  header("Location: index.html");
  exit();

}*/
?>