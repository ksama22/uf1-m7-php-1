<!DOCTYPE html>
<html>
<body>

<!-- C:\xampp\htdocs  crea carpeta i extra er localhost:80/newPhpProject-->
<?php
$taules = array();
for ($i = 0; $i < 10; $i++) {
    $numeroComensal = rand(0, 5);
    array_push($taules, $numeroComensal);
}
?>
<h1> <?php

    for ($i = 0; $i < count($taules); $i++) {
        echo "Taula ",$i+1, " Comensal: ", $taules[$i],"<br>";
    }

 ?></h1>
</body>
</html>

