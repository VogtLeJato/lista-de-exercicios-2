<?php
echo"
********************
e x e r c i c i o 11
********************"\n;
echo"Digite um numero até 999, e eu lhe direi-o por extenso.\n";

$numero =(int) fgets(STDIN);
$contador_centena = 0;
$contador_dezena = 0;
$contador_unidade = 0;

while ($numero > 99 ){
    $numero = $numero - 100;
    
    $contador_centena = $contador_centena + 1;
 }

 while ($numero > 9 ){
    $numero = $numero - 10;
    
    $contador_dezena = $contador_dezena + 1;
 }

    while ($numero > 0 ){
    $numero = $numero - 1;
    
    $contador_unidade = $contador_unidade + 1;
   }

   echo "$contador_centena centas, $contador_dezena dezenas, e $contador_unidade unidades ";
 
