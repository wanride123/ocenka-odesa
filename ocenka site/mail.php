<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$name = urldecode($name);
$phone = urldecode($phone);
$name = trim($name);
$phone = trim($phone);

if (mail("odesa.ocenka@outlook.com", 
         "Новое письмо с сайта", 
         "Имя:".$name." \n".
         "Телефон:".$phone." \n".
         "From: no-reply@mydomain.ru \r\n")
 ) {
    echo ('Письмо успешно отправлено!');
 }
 else {
    echo('Есть ошибки! Проверьте данные... ');
 }
?>

