<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    function maakRij($variable1, $variable2){
        echo "<tr>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; background:".$_POST['color']."; padding:".$_POST['padding']."px;'>$variable1</td>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; background:".$_POST['color']."; padding:".$_POST['padding']."px;'>$variable2</td>";
        echo "</tr>";
    }

    $mezelf = [
    'Naam'     => $_POST['naam'],
    'Leeftijd' => $_POST['leeftijd'],
    'Lengte'   => $_POST['lengte'],
    'Sport'    => $_POST['sport'],
    'Hobbies'  => $_POST['hobbies'],
    ]; 

    echo "<table style='border:  ".$_POST['border-dikte']."px solid' width='300' cellspacing='0'>";

    foreach($mezelf as $key =>$me){
         maakRij($key, $me);
    }
    echo "</table>"
?>
</body>
</html>