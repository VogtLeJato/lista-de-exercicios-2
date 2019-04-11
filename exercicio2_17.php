<?php
echo"
********************
e x e r c i c i o 17
********************\n";

echo"Digite a Base e o expoente e eu elevarei um ao outro.\n";
$numero = fgets(STDIN);
$expoente = fgets(STDIN);
$contador = 1;

while ($contador !=  $expoente){
    $numero = $numero * $numero;
    $contador ++;
}

print $numero;
