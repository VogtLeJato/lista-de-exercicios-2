<?php

echo"
     *******************
     e x e r c i c i o 9
     *******************";
 
sleep(2);

echo"Digite tres numeros, e eu os colocarei em ordem decrescente\n";

sleep(2);

echo"Digite o primeiro numero: ";
$numero_1= (int) fgets(STDIN);
echo"Agora digite o segundo: ";
$numero_2= (int) fgets(STDIN);
echo"E o terceiro";
$numero_3= (int) fgets(STDIN);

if ($numero_1 > $numero_2 and $numero_2 > $numero_3 ){


    print"
          $numero_1\n
          $numero_2\n
          $numero_3\n";
}

if ($numero_1 > $numero_3 and $numero_3 > $numero_2){
    print"
       $numero_1\n
       $numero_3\n
       $numero_2\n";}

//seção do numero 1;

if ($numero_2 > $numero_3 and $numero_3 > $numero_1) {
    print"
       $numero_2\n
       $numero_3\n
       $numero_1\n";}

if ($numero_2 > $numero_1 and $numero_1 > $numero_3) {

    print"
       $numero_2\n
       $numero_1\n
       $numero_3\n";
}

//seção do numero 2;

if ($numero_3 > $numero_1 and $numero_1 > $numero_2) {
    print"
       $numero_3\n
       $numero_1\n
       $numero_2\n";
}

if ($numero_3 > $numero_2 and $numero_2 > $numero_1) {
    print"
       $numero_3\n
       $numero_2\n
       $numero_1\n";
}
