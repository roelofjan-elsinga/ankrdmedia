<?php

if (isset($_POST['email']))  {
    
    //Email information
    $admin_email = "roelofjanelsinga@gmail.com";
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $text = $_POST['text'];
    
    $text .= "\n\nPhone number: {$phone}";
    $text .= "\nFrom: {$email}";
    
    //send email
    $mail = mail($admin_email, "Contact form filled out", $text, "From:" . $email);

    header('Location: https://ankrdmedia.com/contact.php');
}
