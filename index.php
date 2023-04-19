
<?php
$title="Главная страница";
require "Blocks/header.php";
?>
<h1> Главная страница! </h1>
<?php
    echo date('l t-F-Y H:i:s').'<br>';
    echo time();

require "Blocks/footer.php";
    ?>