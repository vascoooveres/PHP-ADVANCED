
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
        echo "<ul>"; 
            $dagen = array("maandag", "dinsadg", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");
            foreach($dagen as $value){
                echo "<li>$value</li>";
            }
        echo "</ul>";
    ?>
</body>
</html>