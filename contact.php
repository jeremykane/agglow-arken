<?php

$errorMSG = "";

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$message = $_POST["message"];

// NAME
if (empty($name)) {
    $errorMSG = "Name is required ";
}

// EMAIL
if (empty($email)) {
    $errorMSG .= "Email is required ";
}

if (empty($phone)) {
    $errorMSG .= "Phone is required ";
}

// MESSAGE
if (empty($message)) {
    $errorMSG .= "Message is required ";
}

// change email with your email
$EmailTo = "agglowskincare@gmail.com";
$Subject = "[AG GLOW] New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $address;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Sukses! Terima kasih telah menghubungi kami.";
}else{
    if($errorMSG == ""){
    echo "Gagal! Silahkan coba lagi.";
    } else {
        echo $errorMSG;
    }
}



?>