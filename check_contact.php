<?php
session_start();
    $user_name= htmlspecialchars(trim($_POST['username']));
    $from= htmlspecialchars(trim($_POST['email']));
    $subject= htmlspecialchars(trim($_POST['subject']));
    $message= htmlspecialchars(trim($_POST['message']));