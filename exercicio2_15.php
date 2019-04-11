<?php
echo"
********************
e x e r c i c i o 15
********************\n"
echo"digite cinco numeros e eu direi o maior deles\n";
$numero_um = fgets(STDIN);
$numero_dois = fgets(STDIN);
$numero_tres = fgets(STDIN);
$numero_quatro = fgets(STDIN);
$numero_cinco = fgets(STDIN);

if ($numero_um > $numero_dois and $numero_um > $numero_tres and $numero_um > $numero_quatro and $numero_um > $numero_cinco)
 {echo"o $numero_um é o maior dos cinco numeros";}

if ($numero_dois > $numero_um and $numero_dois > $numero_tres and $numero_dois > $numero_quatro and $numero_dois > $numero_cinco)
 {echo"o $numero_dois é o maior dos cinco numeros";}

if ($numero_tres > $numero_um and $numero_tres > $numero_dois and $numero_tres > $numero_quatro and $numero_tres > $numero_cinco)
 {echo"o $numero_tres é o maior dos cinco numeros";}

if ($numero_quatro > $numero_um and $numero_quatro > $numero_dois and $numero_quatro > $numero_tres and $numero_quatro > $numero_cinco)
 {echo"o $numero_quatro é o maior dos cinco numeros";}

if ($numero_cinco > $numero_um and $numero_cinco > $numero_dois and $numero_cinco > $numero_tres and $numero_cinco > $numero_quatro)
 {echo"o $numero_cinco é o maior dos cinco numeros";}
