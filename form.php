<?php
//Email information
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$message = $_POST['message'];
$finding = $_POST['finding'];
$services = $_POST['services'];
$destinatary = "your-mail@yourdomain.com";

//Headers of mail
$headers = "From: " . $destinatary . "\r\n";
$headers .= "Reply-To: ". $destinatary . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

//Body of mail
$body = "Name: ". $name . ",\r\n";
$body .= "Email: " . $email . ",\r\n";
$body .= "Phone: " . $phone . ",\r\n";
$body .= "City: " . $city . ",\r\n";
$body .= "Messagee: " . $message . ",\r\n";
$body .= "Found us: " . $finding . ",\r\n";
$body .= "Date: " . date('d/m/Y', time());
$affair = "Information for the service: " . $services;

//};

mail($destinatary, $affair, $body, $headers);
mail($email, $affair, $body, $headers);

header('Location:https://yourdomain.com/success/index.html',TRUE,301);

exit;


?>
