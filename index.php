
<?php
$title="Главная страница";
require "Blocks/header.php";
?>
<h1> Главная страница! </h1>
<?php
$file = fopen('text.php','w');
fwrite($file,"просто текст \n Это просто текст");
fclose($file);

require  "Blocks/footer.php";
?>

