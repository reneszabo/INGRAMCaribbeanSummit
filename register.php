<?php
  
  $to = "ingramcaribbeansummit2015@verlasinc.com";
  
  $title = $_POST['title'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $position = $_POST['position'];
  $home = $_POST['home'];
  $address = $_POST['address'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $mobile = $_POST['mobile'];
  $office = $_POST['office'];
  $passport = $_POST['passport'];
  $country = $_POST['country'];
  $exp_date = $_POST['exp_date'];
  $allergies = $_POST['allergies'];
  $food = $_POST['food'];

  
  $subject = "Registration Petition";
  
  $message = "Title: " . $title . "\r\n" .
             "First Name: " . $firstname . "\r\n" .
             "Last Name: " . $lastname . "\n" .
             "Gender: " . $gender . "\n" .
             "Email: " . $email . "\n" .
             "Company: " . $company . "\n" .
             "Position: " . $position . "\n" .
             "Type of Address: " . $home . "\n" .
             "Address 1: " . $address . "\n" .
             "Address 2: " . $address2 . "\n" .
             "City: " . $city . "\n" .
             "State: " . $state . "\n" .
             "Postal Code: " . $zip . "\n" .
             "Mobile Phone: " . $mobile . "\n" .
             "Office Phone: " . $office . "\n" .
             "Passport: " . $passport . "\n" .
             "Country: " . $country . "\n" .
             "Expiration Date: " . $exp_date . "\n" .
             "Allergies: " . $allergies . "\n" .
             "Food Restrictions: " . $food 
             ;
  
  
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
$mail->addReplyTo($to, 'Ingram Caribbean Summit 2015');
$mail->addAddress($to, 'Ingram Caribbean Summit 2015');
$mail->Subject = $subject;

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
        alert('Registration successfully sent!');
        window.location.assign('index.html');
        </script>";
}

?>