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
    function rekenUit($get1, $get2, $get3){
    
        $antwoord = $get1 + $get2 + $get3;
        return $antwoord;
    }

    $antwoord1 = rekenUit(4, 2, 9,);
    $antwoord2 = rekenUit(333, 33, 3);
    $antwoord3 = rekenUit(1000, 100, 10);

    echo "Als ik de getallen 4, 2 en 9 bij elkaar optel krijg ik $antwoord1  </br>";
    echo "Als ik de getallen 333, 33 en 3 bij elkaar optel krijg ik $antwoord2  </br>";
    echo "Als ik de getallen 1000, 100 en 10 bij elkaar optel krijg ik $antwoord3  </br>";

?>
</body>
</html>