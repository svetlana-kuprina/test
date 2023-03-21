
<?php
$title="Контакты";
require "Blocks/header.php";
?>
<h1 class="mt-5"> <?= $title ?> </h1>
<form action="check_contact.php" method="post">
    <input type="text" name="username" value="<?= $_SESSION['username']?>" placeholder="Введите имя" class="form-control">
    <div class="text-danger"><?= print_r($_SESSION['$error_username'])?></div><br>
    <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Введите email" class="form-control">
    <div class="text-danger"><?= print_r($_SESSION['$error_from'])?></div><br>
    <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Тема сообщения" class="form-control">
    <div class="text-danger"><?= print_r($_SESSION['$error_subject'])?></div><br>
    <textarea name="message" placeholder ="Ваше собщение" class="form-control"><?=$_SESSION['message']?> </textarea>
    <div class="text-danger"><?=print_r($_SESSION['$error_message'])?></div><br>
    <button type="submit" class="btn btn-success">Отправить </button>
</form>

<?php
//print_r($_SESSION);

require "Blocks/footer.php";
?>
