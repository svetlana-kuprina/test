<?php
session_start();
    $user_name= htmlspecialchars(trim($_POST['username']));
    $from= htmlspecialchars(trim($_POST['email']));
    $subject= htmlspecialchars(trim($_POST['subject']));
    $message= htmlspecialchars(trim($_POST['message']));
    $_SESSION['user_name']=$user_name;
    $_SESSION['email']=$from;
    $_SESSION['subject']=$subject;
    $_SESSION['message']=$message;

    if (strlen($user_name) <= 1)
        $error_username = "Введите корректное имя";
    else if (strlen($from)< 5 || strpos( $from,"@")== false)
        $error_from="Введите корректный email";
    else if (strlen($subject)<= 5 )
        $error_subject="Тема сообщения не менее 5 символов";
    else if (strlen($message)<= 15 )
        $error_message="Сообщение не менее 15 символов";