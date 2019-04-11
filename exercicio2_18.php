<?php
echo"
********************
e x e r c i c i o 18
********************\n"

echo"Digite 10 numeros e eu direi quantos são pares e quantos são impares.\n"
$contador = 0;
$contador_numeros = 0;
$contador_par = 0;

while($contador_numeros != 10){
    $numero = fgets(STDIN);
    $contador_numeros ++;

    if ($numero%2 == 1 )
    {
     $contador++;}
     
    if ($numero%2 == 0)
    {
     $contador_par ++;}
    

;}
print"Há $contador numeros impares, e $contador_par numeros pares.\n";
