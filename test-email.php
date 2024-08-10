<?php
$to      = 'jbogovkov@gmail.com';
$subject = 'Test message';
$message = 'Тест временной почты';
$headers = 'From: yarekbobik@gmail.com' . "\r\n" .
    'Reply-To: yarekbobik@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

var_dump(mail($to, $subject, $message, $headers));
?>

