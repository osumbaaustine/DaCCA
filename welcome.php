<?php

if($_POST['formSubmit'] == "Submit") 
{
  $errorMessage = "";

  //Validating : Checking for empty form fields
  if(empty($_POST['first_name'])) 
  {
    $errorMessage .= "<li>You forgot to enter First Name!</li>";
  }
  if(empty($_POST['last_name'])) 
  {
    $errorMessage .= "<li>You forgot to enter a Last name!</li>";
  }
  if(empty($_POST['contact_email'])) 
  {
    $errorMessage .= "<li>You forgot to enter an email!</li>";
  }
  if(empty($_POST['contact_subject'])) 
  {
    $errorMessage .= "<li>You forgot to enter a subject!</li>";
  }
  if(empty($_POST['contact_message'])) 
  {
    $errorMessage .= "<li>You forgot to enter a message!</li>";
  }


  //Variable declaration and assignment
  $varFirstname = $_POST['first_name'];
  $varLastname = $_POST['last_name'];
  $varEmail=$_POST['contact_email'];
  $varSubject=$_POST['contact_subject'];
  $varMessage=$_POST['contact_message'];
  

  if(!empty($errorMessage)) 
  {
    $errorAlert = "There was a problem with your form!";
    echo "<script src='js/main.js'></script>
    <script type='text/javascript'>
    alert('$errorAlert');
    </script>";
   
    echo("<ul>" . $errorMessage . "</ul>\n");
  } 
  else 
  {
    //sending the mail
    //Format: mail($to,$subject,$txt,$headers);

    $to="someone@example.com";
    $headers="From:". $varEmail;
    mail($to,$varSubject,$varMessage,$headers);
   
    //writing entered form data to the csv file
    $fs = fopen("mydata.csv","a");
    fwrite($fs,$varFirstname . ", " . $varLastname . "," . $varEmail . "," . $varSubject . "," . $varMessage . "\n");
    fclose($fs);

    //Alerting user upon successful form submission and redirection using Javascript
    $message = "Submission successful. Thank you!";
    echo "<script src='js/main.js'></script>
    <script type='text/javascript'>
    alert('$message');
    window.location.href='index.php';
    </script>";

  exit;

}

}
