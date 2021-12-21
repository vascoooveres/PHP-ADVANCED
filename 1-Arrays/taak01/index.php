<?php
$student= array(
    "naam" => "Vasco",
    "achternaam" => "Overes",
    "klas" => "LCTSDO1D",
    "leeftijd" => 16

);
?>

<ul><?php echo "Mijn naam is" . " " . $student['naam']?></ul>  
<ul><?php echo "Mijn achternaam is" . " " . $student['achternaam']?></ul> 
<ul><?php echo "Ik zit in klas" . " " . $student['klas'] ?></ul> 
<ul><?php echo "Ik ben" . " " . $student['leeftijd'] . " " . "jaar oud."?></ul>
