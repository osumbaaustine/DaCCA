<?php
// Replace this with your own email address
$siteOwnersEmail = '';


if (isset($_POST)) {

    $name = $_POST['first-name'] + " " + $_POST['last-name'];
    $email = $_POST['contact-email'];
    $subject = $_POST['contact-subject'];
    $contact_message = $_POST['contact-message'];
    echo $_POSt['first-name'];
    // // Check Name
    //  if (strlen($name) < 2) {
    //      $error['name'] = "Please enter your name.";
    //  }
    //  // Check Email
    //  if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
    //      $error['email'] = "Please enter a valid email address.";
    //  }
    //  // Check Message
    //  if (strlen($contact_message) < 15) {
    //      $error['message'] = "Please enter your message. It should have at least 15 characters.";
    //  }
    // // Subject
    //  if ($subject == '') { $subject = "Contact Form Submission"; }
 
 
    // Set Message
    // $message .= "Email from: " . $name . "<br />";
    //  $message .= "Email address: " . $email . "<br />";
    // $message .= "Message: <br />";
    // $message .= $contact_message;
    // $message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";
 
    // // Set From: header
    // $from =  $name . " <" . $email . ">";
 
    // // Email Headers
    //  $headers .= "From: " . $from . "\r\n";
    //  $headers .= "Reply-To: ". $email . "\r\n";
    //   $headers .= "MIME-Version: 1.0\r\n";
    //  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
 
    // if (!$error) {
 
    //    ini_set("sendmail_from", $siteOwnersEmail); // for windows server
    //    $mail = mail($siteOwnersEmail, $subject, $message, $headers);
 
    //      if ($mail) { header("location: ../index.html#contact-section"); }
    //    else { echo "Something went wrong. Please try again."; }
         
    //  } # end if - no validation error
 
    //  else {
 
    //      $response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
    //      $response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
    //      $response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
         
    //      echo $response;
 
    //  } # end if - there was a validation error
    //  header("Location: ../index.html#contact-section");
     
}
