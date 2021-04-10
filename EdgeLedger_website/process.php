<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "gripify@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    
    //send email
    mail($admin_email, "New Form Submission", ' - ' . $phone, "From:" . $email);
    
    header('Location: success.html');
  }