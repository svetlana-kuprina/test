<?php
    $name=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];

    if (trim($name)=="")
        echo"Вы не ввели имя пользователя";
    else if (strlen(trim($name)) <=1)
        echo "Такого имени не существует!";
    else if (trim($email)=="" || trim($pass)==""|| trim($_POST['message'])=="")
        echo "Введите все данные";
    else {
  //      $_POST['password'] = md5($pass);
    //    echo "<h1>Все данные</h1>";
      //  foreach ($_POST as $key=>$value)
        //    echo "<p>$value</p>";
header('Location: about.php');
exit;
    }