<?php
$title="Про нас";
require "Blocks/header.php";
?>
<?php
?>
<div class="container mt-2">
<h1> Про нас! </h1>
<form action="check_post.php" method="post">
    <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
    <input type="text" name="email" placeholder="Введите email" class="form-control"><br>
    <input type="text" name="password" placeholder="Введите пароль" class="form-control"><br>
    <textarea name="message" class="form-control" placeholder="Введите сообщение"> </textarea><br>
    <input type="submit" value="Отправить" class="btn btn-success">
</form>
</div>
<?php
require  "Blocks/footer.php";
?>



