<!DOCTYPE html>
<html>
<body>

<!-- C:\xampp\htdocs  crea carpeta i extra er localhost:80/newPhpProject-->
<?php
$hotel = array();
// 5 plantas
//10 habitaciones

for ($i = 0; $i < 5; $i++) {
    for ($x = 0; $x < 10; $x++) {
        $rand = rand(0, 4);
        array_push($hotel, $i, $rand);
    }
}


for ($i = 0; $i < 5; $i++) {
    for ($x = 0; $x < 10; $x++) {
        echo "Hotel :"+$hotel[$i]  ;
    }
}

?>
<h1> <?php


    ?></h1>
</body>
</html>

