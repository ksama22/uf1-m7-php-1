<!DOCTYPE html>
<html>
<body>

<!-- C:\xampp\htdocs  crea carpeta i extra er localhost:80/newPhpProject-->
<?php
$hotelExemple = array(
    // 5 plantes
    array(0, 0, 2, 2, 0, 3, 0, 0, 4, 0), //10 habitacions
    array(0, 0, 2, 2, 0, 3, 0, 0, 4, 0),
    array(0, 0, 2, 2, 0, 3, 0, 0, 4, 0),
    array(0, 0, 2, 2, 0, 3, 0, 0, 4, 0),
    array(0, 0, 2, 2, 0, 3, 0, 0, 4, 0),
);
// 5 plantas
//10 habitaciones
$numPlantes = 5;
$numHabitacions = 10;
$hotel = array();
for ($i = 0; $i < $numPlantes; $i++) {
    //Crea temporalment les plantesList
    $plantes = array();
    for ($x = 0; $x < $numHabitacions; $x++) {
        //Emplena random fins a 4 hospedatges
        $rand = rand(0, 4);
        $plantes[$x] = $rand;
    }
    //Emplena la llista de plantes al hotel
    $hotel[$i] = array($plantes);
}


function imprimir($var){echo '<pre>';print_r($var);echo '</pre>';}

?>

    <?php
    for ($i = 0; $i < $numPlantes; $i++) {
        //Crea temporalment les plantesList
        for ($x = 0; $x < $numHabitacions; $x++) {
        }
    }
    imprimir($hotel)
    ?>

</body>
</html>

