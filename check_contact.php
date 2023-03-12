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