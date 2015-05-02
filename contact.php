<?php
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) ) {

  $to = "ingramcaribbeansummit2015@verlasinc.com";
  $name = $_POST['name'];
  $subject = "Contact Form";
  $message = $name . " wrote the following: " . "\n\n" . $_POST['message'] . "\n\n" . $_POST['email'];
  $headers = "From: Ingram"."\r\n" . "Reply-To: Ingram"."\r\n";
  mail($to, $subject, $message, $headers);

} else {

  header("Location: index.html");
  exit();

}
?>