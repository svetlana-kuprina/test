
<?php
$title="Контакты";
require "Blocks/header.php";
?>
<h1 class="mt-5"> <?= $title ?> </h1>
<form action="check_contact.php" method="post">
    <input type="text" name="username" placeholder="Введите имя" class="form-control"> <br>
    <input type="email" name="email" placeholder="Введите email" class="form-control"> <br>
    <input type="email" name="subject" placeholder="Тема сообщения" class="form-control"> <br>
    <textarea name="message" placeholder ="Ваше собщение" class="form-control"></textarea><br>
    <button type="submit" class="btn btn-success">Отправить </button>
</form>

<?php


require "Blocks/footer.php";
?>
