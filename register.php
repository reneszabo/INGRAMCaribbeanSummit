<?php

  $to = "ingramcaribbeansummit2015@verlasinc.com";
  
  
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $position = $_POST['position'];
  $home = $_POST['home'];
  $adress = $_POST['adress'];
  $adress2 = $_POST['adress2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $mobile = $_POST['mobile'];
  $office = $_POST['office'];
  $passport = $_POST['adress'];
  $country = $_POST['country'];
  $exp_date = $_POST['exp_date'];
  $allergies = $_POST['allergies'];
  $food = $_POST['food'];

  
  $subject = "Registration Petition";
  
  $message = "First Name: " . $firstname . "\r\n" .
             "Last Name: " . $lastname . "\n" .
             "Gender: " . $gender . "\n" .
             "Email: " . $email . "\n" .
             "Company: " . $company . "\n" .
             "Position: " . $position . "\n" .
             "Type of Adress: " . $home . "\n" .
             "Adress: " . $adress . "\n" .
             "Adress 2: " . $adress2 . "\n" .
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
  
  $headers = "From: Ingram"."\r\n" . "Reply-To: Ingram"."\r\n";
  mail($to, $subject, $message, $headers);
  
  echo "<script type='text/javascript'>
        alert('Registration successfully sent!');
        window.location.assign('index.html');
        </script>";

?>