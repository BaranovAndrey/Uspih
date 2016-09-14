<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: YourWebsite.com'; 
    $to = 'andbarbox@mail.ru'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n Phone: $phone\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Дякуємо за Ваше оголошення!</p>';
    } else { 
        echo '<p>При надсиланні повідомлення сталась помилка! Спробуйте ще раз.</p>'; 
    }
}
?>