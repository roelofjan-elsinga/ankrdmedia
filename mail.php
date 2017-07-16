<?php

if (isset($_POST['email']))  {
    
    //Email information
    $admin_email = "roelofjanelsinga@gmail.com";
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $text = $_POST['text'];
    
    $text .= "\n\n Phone number: {$phone}";
    
    //send email
    mail($admin_email, "Contact form filled out", $text, "From:" . $email);
    
    header('Location: contact.html');
}