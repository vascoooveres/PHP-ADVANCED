<?php
$student  = array(
    "voornaam"    => "Vasco",
    "achternaam"  => "Overes",
    "klas"        => "LCTSDO1D",
    "Leeftijd"    => 16,
    "Woonplaats"  => "Uithoorn"
  );
  foreach($student as $key => $value){
    echo $key . ": " . $value . "<br>";
}
?>
