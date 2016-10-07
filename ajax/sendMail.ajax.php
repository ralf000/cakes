<?php

 header('Content-type: text/plain; charset=utf-8');
 header('Cache-Control: no-store, no-cache');
 header('Expires: ' . date('r'));

 $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
 $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
 $message = filter_input(INPUT_GET, 'message', FILTER_SANITIZE_STRING);

 if (!($name || $email || $message))
     throw new Exception ('Для отправки сообщение недостаточно данных');
 
 $to = 'marinok_89@mail.ru';
 $subject = 'Сообщение с сайта «тортыизпамперсов.рф»';
 $headers = "From: {$name} <{$email}>\r\n";
 $headers .= "Reply-To: " . $email . "\r\n";
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-Type: text/html; charset=utf-8\r\n";

 echo mail($to, $subject, $message, $headers);