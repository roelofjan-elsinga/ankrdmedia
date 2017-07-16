<?php

if (isset($_POST['email']))  {
    
    $secret = "6LcxOSkUAAAAAAgVVsRdQHF9oH4uQ4Wt1wK5ceF2";
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "secret={$secret}&response={$_POST['g-recaptcha-response']}&remoteip={$_SERVER['REMOTE_ADDR']}",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded"
        ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    
    $decoded = json_decode($response);
    
    if($decoded->success) {
        //Email information
        $admin_email = "roelofjanelsinga@gmail.com";
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $text = $_POST['text'];
    
        $text .= "\n\nPhone number: {$phone}";
        $text .= "\nFrom: {$email}";
    
        $headers = "From: {$email}" . "\r\n" .
            "Reply-To: {$email}";
    
        //send email
        $mail = mail($admin_email, "Ankrd Media Contact form", $text, $headers);
    }
    
    header('Location: https://ankrdmedia.com/contact.php');
}
