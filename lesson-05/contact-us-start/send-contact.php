<?php
$to = 'webdstudent@gmail.com';
$subject = "Customer Service Request";
$message = $_POST['customername'] . ' needs your gardening services.';
$headers = 'From: webdstudent@gmail.com' . "\r\n" .
    'Reply-To: webdstudent@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>