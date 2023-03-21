<?php
session_start();

function redirect() {
    header('Location: contact.php');
    exit;
}
    $user_name = htmlspecialchars(trim($_POST['username']));
    $from = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['user_name']=$user_name;
    $_SESSION['email']=$from;
    $_SESSION['subject']=$subject;
    $_SESSION['message']=$message;

    $_SESSION['$error_username'] = '';
    $_SESSION['$error_from'] = '';
    $_SESSION['$error_subject'] = '';
    $_SESSION['$error_message'] = '';

    if (strlen($user_name) <= 5) {
 //       echo("Ошибка имя".'<br>');
        $_SESSION['$error_username'] = "Введите корректное имя";
 //       redirect();
    }
 //   elseif (strlen($from)< 5 || strpos( $from,"@")== false) {
    if (strlen($from)< 5 || strpos( $from,"@")== false) {
//        echo('Ошибка адрес'.'<br>');
        $_SESSION['$error_from'] = "Введите корректный email";
//        redirect();
    }
    if (strlen($subject)<= 5 ) {
//        echo('Ошибка тема'.'<br>');
        $_SESSION['$error_subject'] = "Тема сообщения не менее 5 символов";
//        redirect();
    }
    if (strlen($message)<= 15 ) {
//        echo('Ошибка сообщение'.'<br>');
        $_SESSION['$error_message'] = "Сообщение не менее 15 символов";
//        redirect();
    }

//    echo($_SESSION['$error_username'].'!1!'.'<br>');
//    echo($_SESSION['$error_from'].'!2!'.'<br>');
//    echo($_SESSION['$error_subject'].'!3!'.'<br>');
//    echo($_SESSION['$error_message'].'!4!'.'<br>');

    redirect();